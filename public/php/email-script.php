<?php

require '../php/vendor/autoload.php';

// require 'C:\Wnmp\html\Medical\public\php\vendor\autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$devMode = true;
$mailer = new PHPMailer($devMode);

try {
    // $mailer->SMTPDebug = 2;
    $mailer->isSMTP();

    if ($devMode) {
        $mailer->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];
    }

    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'abde.banouge1@gmail.com';
    $mailer->Password = 'Abde24*-';
    $mailer->SMTPSecure = 'tls';
    $mailer->Port = 587;

    if (isset($_POST['sendMailBtn'])) {
        $fromEmail = 'Largou@dentaire.com';
        $toEmail = $_POST['email'];
        $subjectName = $_POST['subject'];
        $message = $_POST['message'];

        $to = $toEmail;
        $subject = $subjectName;
        $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">' . $message . '</span>
				<div class="container">
                 ' . $message . '<br/>
                    Regards<br/>
                  ' . $fromEmail . '
				</div>
			</body>
			</html>';
    }

    $mailer->setFrom($fromEmail, 'Cabinet Largou');
    $mailer->addAddress($toEmail, 'Largou');


    $mailer->isHTML(true);
    $mailer->Subject = $subjectName;
    $mailer->Body = $message;

    $mailer->send();
    $mailer->clearAllRecipients();
    echo "Email envoye avec succes";
} catch (Exception $e) {
    echo "Email envoye ereur" . $mailer->ErrorInfo;
}
?>
<script>
    window.location.href = "http://127.0.0.1:8005/contact";
</script>