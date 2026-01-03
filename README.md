
<p align="center"><img src="logo-readme.png" width="800"></p>


# CRUD em Laravel do Galdino

Uma breve descrição sobre o que esse projeto faz e para quem ele é

O projeto em questão foi desenvolvido para a fixação dos conteúdos aprendidos pro mim Luan Galdino, no curso [Desenvolvimento Web Avançado com PHP, Laravel e Vue.JS por Jorge Sant Ana](https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel/?couponCode=KEEPLEARNINGBR).




## Stack utilizada

**Front-end:** Blade, TailwindCSS, AOS Animate On Scroll Library

**Back-end:** Laravel 12, PHP


## Instalação e Rodando localmente

Clone o repositório

```bash
  git clone https://github.com/luangaldinodev/CRUD-laravel-Galdino.git
  cd CRUD-laravel-Galdino
```

Instalar dependências do PHP

```bash
  composer install
```

Criar o arquivo .env

```bash
  cp .env.example .env
```

Gerar a chave da aplicação

```bash
  php artisan key:generate
```

Configurar o banco de dados

```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nome_do_banco
  DB_USERNAME=usuario
  DB_PASSWORD=senha
```
**Certifique-se de que o banco de dados já exista.**

Rodar as migrations

```bash
  php artisan migrate
```

(Opcional) Instalar dependências front-end

```bash
  npm install
  npm run dev
```

Iniciar o servidor

```bash
  php artisan serve
```

Acesse:

```bash
  http://127.0.0.1:8000
```
## Referência e Documentações

 - [Laravel Docs](https://laravel.com/docs/12.x)
 - [AOS Animate On Scroll Library](https://michalsnik.github.io/aos/)
 - [Tailwind CSS](https://tailwindcss.com/)


## Suporte e Feedback

Para suporte, mande um email para luangaldinodev@gmail.com ou entre em meu instagram [@ogaldino.dev](https://www.instagram.com/ogaldino.dev/).

