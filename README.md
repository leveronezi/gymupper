# WP Theme Base

Template base para sites WordPress — academias e negócios locais.

## Stack
- PHP (tema WordPress puro)
- ACF (Advanced Custom Fields) para campos editáveis pelo cliente
- Tailwind CSS v3

## Setup local

```bash
npm install
npm run dev    # modo watch
npm run build  # produção (minificado)
```

## Estrutura

```
wp-theme-base/
├── assets/css/main.css       # gerado pelo Tailwind (não editar)
├── assets/js/main.js
├── inc/
│   ├── acf-fields.php        # campos ACF registrados via PHP
│   └── helpers.php           # funções utilitárias
├── src/input.css             # fonte Tailwind — edite aqui
├── templates/
│   ├── hero.php
│   ├── about.php
│   ├── plans.php
│   ├── cta.php
│   └── contact.php
├── front-page.php            # monta as seções acima
├── header.php / footer.php
├── functions.php
├── style.css                 # cabeçalho do tema WordPress
└── tailwind.config.js
```

## Novo projeto (clonar template)

```bash
git clone https://github.com/leveronezi/wp-theme-base nome-da-academia
cd nome-da-academia
npm install && npm run build
```

Copie a pasta para `wp-content/themes/` e ative no WordPress.

## Campos ACF editáveis

| Grupo         | Campos                                          |
|---------------|-------------------------------------------------|
| Hero          | Título, subtítulo, botão CTA, imagem de fundo   |
| Planos        | Repeater: nome, preço, período, benefícios      |
| Contato       | Telefone, email, endereço, Maps, horários, WhatsApp |

> Configure em **WP Admin → Configurações do Tema** (ACF Options Page).
