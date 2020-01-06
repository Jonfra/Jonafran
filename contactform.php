<?php header('Content-Type: text/plain; charset=utf-8');
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];
}


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'jfwebserver01@gmail.com';                     // SMTP username
    $mail->Password   = 'Bmxbmx99!';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($mailFrom, $name,);
    $mail->addAddress('jonafran03@gmail.com');     // Add a recipient

$body = "<p> Meddelande från " . $mailFrom . " , " . $name . " lyder: " . $message . "</p>";

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Meddelande från ' . $name;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);
    header('Location: Formsent.php');


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
