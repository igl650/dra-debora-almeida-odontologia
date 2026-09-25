# Dra. Débora Almeida — Odontologia Estética

Site modelo da Dra. Débora Almeida, em Petrolina-PE. A identidade visual usa o símbolo, as cores e as fotografias reunidas para este projeto.

## Ver localmente

Com PHP 8.1 ou superior:

```bash
php -S localhost:8000 -t public
```

Abra `http://localhost:8000`.

## Publicar na Vercel

Este projeto mantém o código editável em PHP em `public/` e `app/`. A pasta `dist/` contém uma versão HTML estática gerada a partir dessas páginas. Ela é a pasta publicada pela Vercel, conforme `vercel.json`. Não há formulários ou funções de servidor no site.

Após editar uma página PHP, execute:

```bash
node scripts/build-static.mjs
```

Inclua as alterações de `dist/` no mesmo commit. Na Vercel, importe este repositório com o diretório raiz padrão. O projeto usa o preset **Other** e a pasta de saída **dist**. Não é necessário configurar comando de build.

## Estado do protótipo

O protótipo tem `noindex` e bloqueio em `robots.txt`. Antes de lançar em domínio oficial, confirme com a profissional CRO, serviços, endereço, horários, textos, fotos, marca e canal de privacidade. Revise a política de privacidade para a operação real e só então configure domínio, sitemap e indexação. O uso público dos materiais visuais depende de autorização da titular.
