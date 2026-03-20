# DreamHost Shared Hosting Deployment

## 1) Runtime

- PHP 8.x enabled in DreamHost panel
- MySQL database/user created in DreamHost panel

## 2) App config

1. Copy `config/app.ini.example` to `config/app.ini` on server.
2. Fill values under `[database]` and `[admin]`.
3. Keep `config/app.ini` private and never commit it.

## 2.1) Current PHP Structure

- Shared view parts are now under `includes/` (header, footer, menu, extra header, contact handler).
- Entry pages call shared files through `app_include(...)` from `bootstrap.php`.
- This is the compatibility layer for the future full move of PHP files into a dedicated folder.

## 3) Database schema

Run SQL from `config/schema.sql` in phpMyAdmin for your DreamHost database.

## 4) Security

- Ensure `.htaccess` is deployed to protect `.ini` files.
- Use HTTPS for admin URLs.
- Generate a strong admin password hash:

```bash
php -r 'echo password_hash("replace-with-strong-password", PASSWORD_DEFAULT), PHP_EOL;'
```

## 5) Smoke test

- Public page loads: `/Index.php`
- Contact form submits: `/about.php`
- Admin login works: `/admin/login.php`
- Messages show in dashboard: `/admin/index.php`

---

## Deployment Checklist

### Done
- [x] `bootstrap.php` / `app_include()` system
- [x] Shared partials in `includes/`
- [x] All public pages moved to `pages/` with root URL wrappers
- [x] Admin panel + middleware layer
- [x] `.htaccess` security headers + URL router + directory access block
- [x] SSH key generated (`~/.ssh/id_ed25519`) and added to DreamHost panel
- [x] Local PHP installed (`brew install php`)

### SSH Setup (completed)

Public key fingerprint: `SHA256:CKoWdc8Z4yf/irzE1TGvC3sppT8cIQT9gsL3Lc17k88`

To test the connection:

```bash
ssh USERNAME@superfund.site.dreamhosters.com
```

Replace `USERNAME` with your DreamHost shell username (shown in the panel under
**Users > Manage Users**).

### TODO — Step 3: Deploy & DB import

1. Push code to server (rsync or git):

```bash
rsync -avz --exclude 'config/app.ini' ./ USERNAME@superfund.site.dreamhosters.com:~/superfund.site/
```

2. On the server, create `config/app.ini` from the example and fill in credentials.
3. Run `config/schema.sql` in phpMyAdmin on DreamHost.
4. Generate admin password hash on server:

```bash
php -r 'echo password_hash("replace-with-strong-password", PASSWORD_DEFAULT), PHP_EOL;'
```

5. Put hash into `config/app.ini` under `[admin]`.
6. Run smoke tests (section 5 above).
