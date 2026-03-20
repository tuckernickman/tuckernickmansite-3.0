<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/middleware/db.php';
require_once dirname(__DIR__) . '/middleware/security.php';

$contactFormStatus = [
    'type' => '',
    'message' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $tokenOk = csrf_validate($_POST['csrf_token'] ?? null);
    if (!$tokenOk) {
        $contactFormStatus = [
            'type' => 'error',
            'message' => 'Invalid form token. Please refresh the page and try again.',
        ];
        return;
    }

    $fname = cleanse_data((string)($_POST['fname'] ?? ''));
    $lname = cleanse_data((string)($_POST['lname'] ?? ''));
    $email = filter_var((string)($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = cleanse_data((string)($_POST['phone'] ?? ''));
    $txtReasonDetail = cleanse_data((string)($_POST['txtReasonDetail'] ?? ''));

    if ($fname === '' || $lname === '' || $email === '' || $phone === '' || $txtReasonDetail === '') {
        $contactFormStatus = [
            'type' => 'error',
            'message' => 'Please complete all fields before submitting.',
        ];
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $contactFormStatus = [
            'type' => 'error',
            'message' => 'Please enter a valid email address.',
        ];
        return;
    }

    try {
        db_insert_contact_message($fname, $lname, $email, $phone, $txtReasonDetail);

        $contactFormStatus = [
            'type' => 'success',
            'message' => 'Thanks, your message was received.',
        ];
    } catch (Throwable $e) {
        $contactFormStatus = [
            'type' => 'error',
            'message' => 'Message could not be saved right now. Please try again later.',
        ];
    }
}

function cleanse_data(string $data): string
{
    return trim(strip_tags($data));
}
?>