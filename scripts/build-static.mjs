import { execFileSync } from 'node:child_process';
import { cpSync, existsSync, mkdirSync, readFileSync, rmSync, writeFileSync } from 'node:fs';
import { fileURLToPath } from 'node:url';
import path from 'node:path';

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const source = path.join(root, 'public');
const output = path.join(root, 'dist');
const pages = [
  'index',
  'sobre',
  'lentes-em-resina',
  'clareamento-dental',
  'saude-bucal',
  'contato',
  'privacidade',
];

if (!existsSync(path.join(source, 'index.php'))) {
  throw new Error('Arquivo public/index.php não encontrado.');
}

rmSync(output, { recursive: true, force: true });
mkdirSync(output, { recursive: true });
cpSync(path.join(source, 'assets'), path.join(output, 'assets'), { recursive: true });
rmSync(path.join(output, 'assets', 'img', 'README.md'), { force: true });

for (const page of pages) {
  const html = execFileSync('php', [path.join(source, `${page}.php`)], {
    cwd: source,
    encoding: 'utf8',
    maxBuffer: 4 * 1024 * 1024,
  });
  const staticHtml = html.replace(/(href="[^"]*?)\.php(?=[^"\n]*")/g, '$1.html');
  if (!staticHtml.includes('</html>') || staticHtml.includes('Fatal error:')) {
    throw new Error(`Falha ao gerar ${page}.html`);
  }
  writeFileSync(path.join(output, `${page}.html`), staticHtml, 'utf8');
}

// Protótipo público: a indexação fica bloqueada até aprovação da profissional.
writeFileSync(path.join(output, 'robots.txt'), 'User-agent: *\nDisallow: /\n', 'utf8');

for (const page of pages) {
  const html = readFileSync(path.join(output, `${page}.html`), 'utf8');
  if (/href="[^"]*\.php(?:#|\?|\")/.test(html)) {
    throw new Error(`Link PHP remanescente em ${page}.html`);
  }
}

console.log(`Geradas ${pages.length} páginas em dist/ para publicação estática.`);
