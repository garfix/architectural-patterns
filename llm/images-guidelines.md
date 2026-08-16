# Image Guidelines for LLM-generated SVGs

Date: 2026-08-16

Purpose: capture visual style rules to keep generated technique images consistent and minimal.

Rules:
- Only use short labels to *name* elements (box labels like `S0`, `Prior`, `Posterior`). Do not use paragraphs or explanatory sentences inside the SVG.
- Use small, solid black arrow shafts with small black triangular arrowheads for all directed edges.
- Avoid dangling arrows; every arrow must clearly point to a target element (box, node) or be drawn as a loop attached to a box.
- Prefer 350×350 rendered size with viewBox `0 0 282 282` for internal layout consistency.
- Keep diagrams minimal: 3–6 elements, clear arrows, and at most a one-word or short label per element.
- Use a friendly sans-family (Comic Sans or similar) for labels to match site style.

- Numeric probability labels (e.g., `0.6`) are allowed and should be placed unobtrusively near arrow midpoints to indicate transition weights. Keep them short (one number) and avoid explanatory text in the SVG.
 - When creating an image for a technique, automatically add a `<figure>` block referencing the image to the technique's PHP page (e.g., `src/<slug>.php`).

Examples:
- Good: `S0 -> S1 -> S2` with small black arrowheads, labels only on boxes.
- Bad: large explanatory text describing the algorithm, or arrows that stop mid-air.

I'll follow these rules when creating or updating SVGs and record changes under `llm/`.
