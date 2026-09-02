#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""og_build.py — уникальные изображения для сниппета Google под страницы базы знаний.

Зачем: у всех статей стояла одна заглушка /img/og-image.png (1200×630) — Google не показывает
миниатюру, когда картинка повторяется на сотнях URL и не относится к содержанию. Генерируем
по шаблону: заголовок статьи (H1) на фирменном фоне, категория золотом, герб и домен внизу.

Требования Google: ширина ≥ 1200 px, три соотношения в массиве Article.image — 16:9, 4:3, 1:1.
Выход: img/og/<slug>-16x9.jpg, -4x3.jpg, -1x1.jpg (JPEG, качество 88).

Запуск:
    python3 og_build.py <fonts_dir> <out_dir> <slug> "<H1>" "<категория>"
    python3 og_build.py --batch <fonts_dir> <out_dir> <json>   # [{"slug","h1","cat"},...]

Шрифты: PlayfairDisplay[wght].ttf и Inter[opsz,wght].ttf (Google Fonts, OFL) — те же семейства,
что на сайте (там они в woff2, Pillow читает только ttf). Герб — img/LogoWhite.png из репозитория,
без упрощения (правило владельца: только оригинальный знак).
"""
import os, sys, json, textwrap
from PIL import Image, ImageDraw, ImageFont

BG = (20, 19, 16)          # #141310 — тёмная тема сайта
INK = (244, 241, 235)      # #F4F1EB — бумага
GOLD = (201, 169, 110)     # акцент
MUTE = (160, 154, 142)
SIZES = {"16x9": (1200, 675), "4x3": (1200, 900), "1x1": (1200, 1200)}


def font(path, size, weight=None):
    f = ImageFont.truetype(path, size)
    if weight is not None:
        try:
            axes = f.get_variation_axes()
            vals = []
            for a in axes:
                n = a["name"].decode() if isinstance(a["name"], bytes) else a["name"]
                vals.append(weight if n == "Weight" else (32 if n == "Optical size" else a["default"]))
            f.set_variation_by_axes(vals)
        except Exception:
            pass
    return f


NBSP_AFTER = ("№", "ст.", "п.", "гл.", "ФЗ", "от")

def wrap(draw, text, fnt, max_w):
    # «№ 1465», «ст. 5» — не разрывать между знаком и номером
    for t in NBSP_AFTER:
        text = text.replace(t + " ", t + "\u00a0")
    text = text.replace(" + ", "\u00a0+\u00a0").replace(" и ", "\u00a0и ")   # «1% + 25%», союз не в начале строки
    words, lines, cur = text.split(" "), [], ""
    for w in words:
        t = (cur + " " + w).strip()
        if draw.textlength(t, font=fnt) <= max_w:
            cur = t
        else:
            if cur: lines.append(cur)
            cur = w
    if cur: lines.append(cur)
    return lines


def render(fonts_dir, out_dir, slug, h1, cat, logo_path, sub="База знаний по казначейскому сопровождению"):
    logo = Image.open(logo_path).convert("RGBA")
    os.makedirs(out_dir, exist_ok=True)
    made = []
    for key, (W, H) in SIZES.items():
        im = Image.new("RGB", (W, H), BG)
        d = ImageDraw.Draw(im)
        pad = 84
        # тонкая золотая линия сверху — фирменный штрих
        d.rectangle([0, 0, W, 6], fill=GOLD)
        # категория
        f_cat = font(os.path.join(fonts_dir, "Inter.ttf"), 26, 600)
        d.text((pad, pad), cat.upper(), font=f_cat, fill=GOLD)
        # заголовок: подбираем кегль под площадь
        max_w = W - 2 * pad
        y0 = pad + 70
        # место под футер
        footer_h = 96 + pad + 40          # герб + отступ + воздух над футером
        avail_h = H - y0 - footer_h
        size = 84 if key != "16x9" else 68
        while True:
            f_h1 = font(os.path.join(fonts_dir, "Playfair.ttf"), size, 500)
            lines = wrap(d, h1, f_h1, max_w)
            lh = int(size * 1.16)
            if (len(lines) * lh <= avail_h and len(lines) <= 5) or size <= 34:
                break
            size -= 3
        y = y0 + (0 if key == "16x9" else min(60, max(0, (avail_h - len(lines) * lh) // 3)))
        for ln in lines:
            d.text((pad, y), ln, font=f_h1, fill=INK)
            y += lh
        # футер: герб + домен + подпись
        lg_h = 104
        lg = logo.resize((int(logo.width * lg_h / logo.height), lg_h), Image.LANCZOS)
        fy = H - pad - lg_h
        im.paste(lg, (pad, fy), lg)
        f_dom = font(os.path.join(fonts_dir, "Inter.ttf"), 30, 600)
        f_sub = font(os.path.join(fonts_dir, "Inter.ttf"), 22, 400)
        d.text((pad + lg.width + 28, fy + 18), "kaznaexpert.ru", font=f_dom, fill=INK)
        d.text((pad + lg.width + 28, fy + 60), sub, font=f_sub, fill=MUTE)
        # 16:9 — JPEG (og:image для соцсетей и мессенджеров), 4:3 и 1:1 — WebP (только для
        # Article.image, Google WebP читает); так весь комплект втрое легче для репозитория
        if key == "16x9":
            path = os.path.join(out_dir, f"{slug}-{key}.jpg")
            im.save(path, "JPEG", quality=76, optimize=True, progressive=True, subsampling=2)
        else:
            path = os.path.join(out_dir, f"{slug}-{key}.webp")
            im.save(path, "WEBP", quality=78, method=4)
        made.append(path)
    return made


if __name__ == "__main__":
    a = sys.argv[1:]
    logo = os.environ.get("OG_LOGO", "LogoWhite.png")
    if a and a[0] == "--batch":
        fonts_dir, out_dir, spec = a[1], a[2], json.load(open(a[3], encoding="utf-8"))
        for it in spec:
            for p in render(fonts_dir, out_dir, it["slug"], it["h1"], it["cat"], logo, it.get("sub","База знаний по казначейскому сопровождению")):
                print(p)
    else:
        fonts_dir, out_dir, slug, h1, cat = a[:5]
        for p in render(fonts_dir, out_dir, slug, h1, cat, logo):
            print(p)
