<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/middleware/auth.php';
require_once dirname(__DIR__) . '/middleware/security.php';

auth_start_session();

if (auth_is_admin()) {
    header('Location: /admin/index.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validToken = csrf_validate($_POST['csrf_token'] ?? null);
    if (!$validToken) {
        $error = 'Invalid session token. Refresh and try again.';
    } else {
        $username = trim((string)($_POST['username'] ?? ''));
        $password = (string)($_POST['password'] ?? '');

        if (auth_attempt_login($username, $password)) {
            header('Location: /admin/index.php');
            exit;
        }

        $error = 'Login failed. Check username/password.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f2f4f7;
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
        }
        .card {
            width: min(420px, 92vw);
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 24px;
        }
        h1 {
            margin-top: 0;
            margin-bottom: 14px;
            font-size: 1.4rem;
        }
        label {
            display: block;
            margin: 10px 0 6px;
            font-size: 0.92rem;
            font-weight: 600;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d0d6dd;
            border-radius: 8px;
            font-size: 0.95rem;
            box-sizing: border-box;
        }
        button {
            margin-top: 14px;
            width: 100%;
            padding: 10px;
            border: 0;
            border-radius: 8px;
            background: #0d6efd;
            color: #fff;
            font-weight: 700;
            cursor: pointer;
        }
        .error {
            background: #ffe9ea;
            border: 1px solid #ffc9cf;
            color: #a71d2a;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .meta {
            margin-top: 14px;
            font-size: 0.82rem;
            color: #5b6672;
        }
    </style>
</head>
<body>
<div class="card">
    <h1>Admin Panel Login</h1>

    <?php if ($error !== ''): ?>
        <div class="error"><?php echo esc_html($error); ?></div>
    <?php endif; ?>

    <form method="post" action="/admin/login.php">
        <input type="hidden" name="csrf_token" value="<?php echo esc_html(csrf_token()); ?>">

        <label for="username">Username</label>
        <input id="username" name="username" type="text" required>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>

        <button type="submit">Sign in</button>
    </form>

    <p class="meta">Set credentials in config/app.ini based on config/app.ini.example.</p>
</div>
</body>
</html>
