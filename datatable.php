<?php

declare(strict_types=1);

require_once __DIR__ . '/middleware/db.php';
require_once __DIR__ . '/middleware/security.php';

function render_contact_table(): void
{
    try {
        $rows = db_fetch_contact_messages();
    } catch (Throwable $e) {
        echo '<p>' . esc_html('Unable to load contact data.') . '</p>';
        return;
    }

    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Message</th></tr>';

    foreach ($rows as $row) {
        $name = trim((string)($row['first_name'] ?? '') . ' ' . (string)($row['last_name'] ?? ''));
        echo '<tr>';
        echo '<td>' . esc_html((string)($row['id'] ?? '')) . '</td>';
        echo '<td>' . esc_html($name) . '</td>';
        echo '<td>' . esc_html((string)($row['email'] ?? '')) . '</td>';
        echo '<td>' . esc_html((string)($row['phone'] ?? '')) . '</td>';
        echo '<td>' . nl2br(esc_html((string)($row['contact_message'] ?? ''))) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
