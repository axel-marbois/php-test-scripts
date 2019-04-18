<?php
$to      = 'admin@test-cron.com';
$date = date("Y-m-d H:i:s");
$subject = "Test $date";
$message = 'Bonjour Axel !';
$headers = 'From: php-script@test-cron.com' . "\r\n" .
'Reply-To: php-script@test-cron.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>