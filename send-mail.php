<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer; // PHPMailer - PHP email creation and transport class.
use PHPMailer\PHPMailer\SMTP; // PHPMailer RFC821 SMTP email transport class.Implements RFC 821 SMTP commands and provides some utility methods for sending mail to an SMTP server.
use Dotenv\Dotenv; // Import the Dotenv class

// Load the .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create a PHPMailer instance and set up SMTP using the retrieved credentials
$mail = new PHPMailer(true);

try{

  //server configurations..
  $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
  $mail->isSMTP(); //Send using SMTP
  $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
  $mail->SMTPAuth = true; //Enable SMTP authentication
  $mail->Username = $_ENV['SMTP_USERNAME']; //SMTP username
  $mail->Password = $_ENV['SMTP_PASSWORD']; //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
  $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`



  $mail->setFrom($email, $name);
  $mail->addAddress("dev.sajith@gmail.com", "Sajith"); // The email address to send to

  $mail->Subject = $subject;
  $mail->Body = $message;

  $mail->send();

  header("Location: sent.html");

} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>