import fs from 'fs';
const filePath = process.argv[2];
const pattern = process.argv[3] || 'route';
if (!filePath) { console.error('Usage: node extract_links.mjs <file> [pattern]'); process.exit(2); }
const content = fs.readFileSync(filePath,'utf8');
const regex = new RegExp(`href=\"([^\\\"]*${pattern}[^\\\"]*\\.php)\"`,'ig');
let m; const out = new Set();
while((m = regex.exec(content))){ out.add(m[1]); }
console.log([...out].join('\n'));
