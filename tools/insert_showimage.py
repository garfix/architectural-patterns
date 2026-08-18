#!/usr/bin/env python3
from pathlib import Path
import re

repo = Path(__file__).resolve().parents[1]
src = repo / 'src'

updated = []
skipped = []
no_dl = []

for php in sorted(src.glob('*.php')):
    s = php.read_text(encoding='utf-8')
    # skip template files
    if php.name.startswith('template'):
        continue
    # if file already contains showImage or any figure tag, skip
    if 'showImage(' in s or '<figure' in s:
        skipped.append(str(php.relative_to(repo)))
        continue
    # find first </dl>
    m = re.search(r'</dl>', s, flags=re.I)
    if not m:
        no_dl.append(str(php.relative_to(repo)))
        continue
    insert_pos = m.end()
    insert = '\n    <?php showImage($pattern) ?>\n'
    new_s = s[:insert_pos] + insert + s[insert_pos:]
    php.write_text(new_s, encoding='utf-8')
    updated.append(str(php.relative_to(repo)))

print('Updated files:')
for u in updated:
    print(' -', u)
print('\nSkipped files (already had figure or showImage):')
for s in skipped[:200]:
    print(' -', s)
print('\nFiles without </dl> (left unchanged):')
for n in no_dl:
    print(' -', n)
print('\nDone.')
