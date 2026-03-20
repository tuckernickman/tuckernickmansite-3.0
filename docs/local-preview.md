# Local PHP Preview

## Prerequisite

PHP is installed via Homebrew. Verify with `php -v`.

From the project root, start the built-in PHP server:

```bash
php -S localhost:8000 -t .
```

Then open:

- http://localhost:8000/index.php
- http://localhost:8000/about.php
- http://localhost:8000/admin/login.php

## Current Structure

- Public page sources are in `pages/`.
- Root files (for example `index.php`, `about.php`, `videos.php`) are compatibility wrappers that require files from `pages/`.

## VS Code Task Workflow

Use Terminal > Run Task:

- Serve PHP (localhost:8000)
- Generate Admin Password Hash

## Admin Setup

1. Copy `config/app.ini.example` to `config/app.ini`.
2. Set database credentials and `contact_table`.
3. Generate a password hash:

```bash
php -r 'echo password_hash("change-me", PASSWORD_DEFAULT), PHP_EOL;'
```

4. Put the generated value into `admin.password_hash` in `config/app.ini`.

## DreamHost Notes

- Keep `config/app.ini` out of version control.
- Use DreamHost MySQL host/user/password.
- Enforce HTTPS for admin routes in production.
