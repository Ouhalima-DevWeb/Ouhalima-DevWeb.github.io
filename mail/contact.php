<?php
// if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message'])) {
//   http_response_code(500);
//   exit();
// }


// $to = "sofianeou93@gmail.com"; // Change this email to your own email address
// $subject = "$m_subject: $name";
// $body = "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\nEmail: $email\nSubject: $m_subject\nMessage:\n$message";
// $headers = "From: $email\r\nReply-To: $email\r\n";

// if (!mail($to, $subject, $body, $headers)) {
//   http_response_code(500);
// }
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = (($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$headers = 'From: sofianeou93@gmail.com'       . "\r\n" .
  'Reply-To: sofianeou93@gmail.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
