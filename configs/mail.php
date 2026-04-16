<?php 
use PHPMailer\PHPMailer\PHPMailer;

return [
    'smtp' => [
        'host' => $_ENV['SMTP_HOST'] ?? null,
        'port' => $_ENV['SMTP_PORT'] ?? null,
        'user' => $_ENV['SMTP_USER'] ?? null,
        'password' => ($_ENV['SMTP_PASSWORD'] ?? null),
        'security' => PHPMailer::ENCRYPTION_STARTTLS,
        'from' => $_ENV['SMTP_FROM'] ?? null,
        'to' => $_ENV['SMTP_TO'] ?? null,
    ],
];
