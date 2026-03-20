<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/middleware/auth.php';
require_once dirname(__DIR__) . '/middleware/db.php';
require_once dirname(__DIR__) . '/middleware/security.php';

auth_require_admin();

$error = '';
$messages = [];

try {
    $messages = db_fetch_contact_messages();
} catch (Throwable $e) {
    $error = $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            background: #f4f6f9;
            color: #202833;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
        header {
            background: #111827;
            color: #fff;
            padding: 14px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        main {
            padding: 18px;
        }
        .panel {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ebeff5;
            vertical-align: top;
            font-size: 0.94rem;
        }
        th {
            background: #f8fafc;
            font-size: 0.85rem;
            letter-spacing: 0.02em;
            text-transform: uppercase;
        }
        .error {
            margin-bottom: 14px;
            background: #ffe9ea;
            border: 1px solid #ffc9cf;
            color: #a71d2a;
            padding: 10px;
            border-radius: 8px;
        }
        .logout {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
<header>
    <strong>Admin Dashboard</strong>
    <a class="logout" href="/admin/logout.php">Logout</a>
</header>

<main>
    <?php if ($error !== ''): ?>
        <div class="error"><?php echo esc_html($error); ?></div>
    <?php endif; ?>

    <section class="panel">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($messages) === 0): ?>
                <tr>
                    <td colspan="5">No messages found.</td>
                </tr>
            <?php endif; ?>

            <?php foreach ($messages as $row): ?>
                <tr>
                    <td><?php echo esc_html((string)($row['id'] ?? '')); ?></td>
                    <td><?php echo esc_html(trim((string)($row['first_name'] ?? '') . ' ' . (string)($row['last_name'] ?? ''))); ?></td>
                    <td><?php echo esc_html((string)($row['email'] ?? '')); ?></td>
                    <td><?php echo esc_html((string)($row['phone'] ?? '')); ?></td>
                    <td><?php echo nl2br(esc_html((string)($row['contact_message'] ?? ''))); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>
</body>
</html>
