#!/usr/bin/env python3
from pathlib import Path
import re

repo = Path(__file__).resolve().parents[1]
src = repo / 'src'

updated = []
no_dl = []

for php in sorted(src.glob('*.php')):
    # skip files in template folder (not matched by glob) and skip non-files
    if not php.is_file():
        continue
    s = php.read_text(encoding='utf-8')
    original = s
    # remove any existing showImage calls to avoid duplicates
    s = re.sub(r'<\?php\s*showImage\([^)]*\)\s*;?\s*\?>', '', s, flags=re.I)
    # find first </dl>
    m = re.search(r'</dl>', s, flags=re.I)
    if not m:
        no_dl.append(str(php.relative_to(repo)))
        continue
    insert_pos = m.end()
    # remove any immediate <figure> block after </dl>
    after = s[insert_pos:insert_pos+1000]  # inspect following chunk
    fig_match = re.match(r'\s*<figure[\s\S]*?<\/figure>\s*', after, flags=re.I)
    if fig_match:
        # remove that figure
        start = insert_pos
        end = insert_pos + fig_match.end()
        s = s[:start] + s[end:]
    # insert the canonical showImage call after </dl>
    insert = '\n    <?php showImage($pattern) ?>\n'
    # Avoid double-inserting if somehow already present now
    if re.search(r'</dl>\s*<\?php\s*showImage\(', s, flags=re.I):
        # already present, skip
        continue
    s = s[:insert_pos] + insert + s[insert_pos:]
    if s != original:
        php.write_text(s, encoding='utf-8')
        updated.append(str(php.relative_to(repo)))

print('Updated files:')
for u in updated:
    print(' -', u)
print('\nFiles without </dl> (left unchanged):')
for n in no_dl:
    print(' -', n)
print('\nDone.')
