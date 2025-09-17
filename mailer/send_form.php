<?php$to = "manu.abril2602@gmail.com";

$subject = "Nuevo mensaje desde el formulario web";
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subjectUser = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

$body = "Nombre: $name\n";
$body .= "Email: $email\n";
$body .= "Asunto: $subjectUser\n\n";
$body .= "Mensaje:\n$message\n";

if(mail($to, $subject, $body, $headers)) {echo "success";} else {echo "error";}?>
