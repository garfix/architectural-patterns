# Pattern Diagram Rendering Guide

This file explains how to render a pattern diagram image. It is intended for
me (the assistant) and for any future agent working on this repository.

## The spec (requirements)

Every generated pattern diagram image must satisfy *all* of the following:

1. **Simple black and white diagram.** Use only black lines/fills on a white
   background (grayscale only). No color fills.
2. **Represents the essence of the technique.** Draw only the core structural
   idea of the pattern, nothing decorative.
3. **350x350 px.** The image must be exactly 350 by 350 pixels.
4. **Text is used only to name things.** Labels may only *name* the parts of
   the diagram (e.g. "Button", "Window", "Field"). Do not use descriptive
   sentences or prose.
5. **Comic Sans font.** Use Comic Sans MS for any text. The font file used on
   this machine is `/usr/share/fonts/truetype/msttcorefonts/comic.ttf`.
6. **No title.** Do not include a heading/title anywhere in the image.
7. **Do not insert the name of the technique in the picture.** Never write the
   pattern's own name (or its acronym) inside the image.
8. **PNG image.** Export as a `.png` file.

## Naming / file conventions

- Place the output in `src/images/`.
- Use the pattern's lowercase, hyphenated link-based filename, e.g.
  `gui.png` (not `gui.drawio.png`) for plain generated images.
- When you (re)create an image, update the matching `"image"` entry for the
  pattern in `src/template/data.php` so it points at the new file.

## Render procedure (reference)

The diagram can be produced with Python + Pillow. Sketch this outline:

1. Create a 350x350 white RGB image.
2. Draw the diagram shapes with black (`#000000`) outlines only.
3. Load Comic Sans MS: `ImageFont.truetype("/usr/share/fonts/truetype/msttcorefonts/comic.ttf", <size>)`.
4. Draw short labels with `draw.text(...)` near each named part.
5. Save as `src/images/<pattern>.png`.

## Anti-patterns to avoid

- Adding a title or the pattern name: **forbidden**.
- Using color; using fonts other than Comic Sans MS.
- Rendering at any size other than 350x350.
- Using text for explanations instead of just naming diagram parts.