#!/usr/bin/env python3
import re
from pathlib import Path
repo = Path(__file__).resolve().parents[1]
src = repo / 'src'

updated = []
for php in src.glob('*.php'):
    s = php.read_text(encoding='utf-8')
    def replace_dd(m):
        content = m.group(1)
        # capitalize first letter if lowercase
        if content and content[0].islower():
            content = content[0].upper() + content[1:]
        # capitalize letter after sentence endings
        content = re.sub(r'([\.\?\!]\s+)([a-z])', lambda mm: mm.group(1) + mm.group(2).upper(), content)
        return '<dd>' + content + '</dd>'
    new_s, n = re.subn(r'<dd>(.*?)</dd>', replace_dd, s, flags=re.S)
    if n>0 and new_s!=s:
        php.write_text(new_s, encoding='utf-8')
        updated.append(str(php.relative_to(repo)))

print('Fixed sentence case in <dd> for files:')
for u in updated:
    print(' -', u)
print('Done.')
