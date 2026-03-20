# Local PHP Preview

## Prerequisite

If `php` is not installed on macOS:

```bash
brew install php
```

Verify installation:

```bash
php -v
```

From the project root, start the built-in PHP server:

```bash
php -S localhost:8000 -t .
```

Then open:

- http://localhost:8000/Index.php
- http://localhost:8000/admin/login.php

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
