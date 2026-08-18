#!/usr/bin/env python3
import re
from pathlib import Path

repo = Path(__file__).resolve().parents[1]
rewritten = repo / 'llm' / 'claude-input-rewritten.md'
src = repo / 'src'

text = rewritten.read_text(encoding='utf-8')

# Find all pattern headings like: ### Name (`slug`)
pattern = re.compile(r"^###\s+.*?\(`([^`]+)`\)\n(.*?)(?=\n###\s|\n---\n|\Z)", re.S | re.M)

replacements = {}
for m in pattern.finditer(text):
    slug = m.group(1).strip()
    body = m.group(2).strip()
    # take first paragraph as the definition (up to first blank line)
    para = body.split('\n\n', 1)[0].strip().replace('\n', ' ')
    # remove audience mentions like 'For a junior programmer,' etc.
    para = re.sub(r"\bFor (a |the )?junior (programmer|programmers|devs|developers),?\s*", "", para, flags=re.I)
    para = re.sub(r"\bFor juniors,?\s*", "", para, flags=re.I)
    replacements[slug] = para

updated = []
missing = []
failed = []

for slug, new_def in replacements.items():
    php_file = src / f"{slug}.php"
    if not php_file.exists():
        missing.append(slug)
        continue
    s = php_file.read_text(encoding='utf-8')
    # regex to replace <dt>Definition</dt> followed by <dd>...</dd>
    m = re.search(r"(<dt>\s*Definition\s*</dt>\s*<dd>)(.*?)(</dd>)", s, flags=re.S)
    if not m:
        # try alternative spacing/formatting
        try:
            m = re.search(r"<dt\s*>\s*Definition\s*</dt>\s*([\s\S]*?)<\/dl>", s, flags=re.I)
        except Exception:
            m = None
    if not m:
        failed.append(str(php_file))
        continue
    prefix = m.group(1)
    suffix = m.group(3)
    new_dd = prefix + new_def + suffix
    new_s = s[:m.start()] + new_dd + s[m.end():]
    php_file.write_text(new_s, encoding='utf-8')
    updated.append(str(php_file.relative_to(repo)))

# Print summary
print('Updated files:')
for u in updated:
    print(' -', u)
print('\nMissing files (no matching src/<slug>.php):')
for m in missing[:50]:
    print(' -', m)
if len(missing) > 50:
    print(f'  ... and {len(missing)-50} more')
print('\nFiles needing manual review:')
for f in failed:
    print(' -', f)

print('\nDone.')
