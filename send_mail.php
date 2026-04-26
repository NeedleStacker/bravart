<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$config = require __DIR__ . '/includes/config.php';
require 'includes/captcha_helper.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Honeypot check
    if (!empty($_POST['website'])) {
        echo json_encode(['status' => 'error', 'message' => 'Spam detection triggered.']);
        exit;
    }

    // Captcha check
    $user_captcha = mb_strtolower(trim($_POST['captcha'] ?? ''), 'UTF-8');
    $correct_captcha = $_SESSION['captcha_answer'] ?? '';

    if (empty($user_captcha) || $user_captcha !== $correct_captcha) {
        $new_q = getCaptchaQuestion();
        echo json_encode(['status' => 'error', 'message' => 'Pogrešan odgovor na sigurnosno pitanje.', 'new_captcha' => $new_q]);
        exit;
    }

    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $message = strip_tags(trim($_POST["message"]));

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Molimo ispunite sva obavezna polja ispravno.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = $config['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = SITE_EMAIL;
        $mail->Password   = $config['SMTP_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $config['SMTP_PORT'];
        $mail->CharSet    = 'UTF-8';

        // Recipients
        $mail->setFrom(SITE_EMAIL, SITE_NAME);
        $mail->addAddress(SITE_EMAIL);
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Novi upit s web stranice: $name";
        $mail->Body    = "
            <h3>Novi upit s kontakt forme</h3>
            <p><strong>Ime:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefon:</strong> $phone</p>
            <p><strong>Poruka:</strong><br>$message</p>
        ";

        $mail->send();
        $new_q = getCaptchaQuestion();
        echo json_encode(['status' => 'success', 'message' => 'Vaša poruka je uspješno poslana!', 'new_captcha' => $new_q]);
    } catch (Exception $e) {
        $new_q = getCaptchaQuestion();
        echo json_encode(['status' => 'error', 'message' => "Poruka nije mogla biti poslana. Greška: {$mail->ErrorInfo}", 'new_captcha' => $new_q]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Nevažeći zahtjev.']);
}
