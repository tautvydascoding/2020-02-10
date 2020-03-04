<?php
// print_r( $_POST );
$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];
// echo "  $klientoVardas  $klientoPavarde  <hr /> ";
// echo "  $klientoAntraste  <hr /> $klientoKlausimas   ";
// echo "  <hr /> $klientoPastas   ";



    // Load Composer's autoloader
    // require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('Etc/UTC');
    require 'libs/PHPMailer-master/src/Exception.php';
    require 'libs/PHPMailer-master/src/PHPMailer.php';
    require 'libs/PHPMailer-master/src/SMTP.php';
    // Load Composer's autoloader
    // require 'vendor/autoload.php';
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {


        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );

        $mail->Mailer = "smtp";
        $mail->Host = 'tls://smtp.gmail.com:587';
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;                                      // TCP port to connect to

        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                               // Set the SMTP server to send through

        $mail->Username = 'testascoding@gmail.com';                 // SMTP username
        $mail->Password = 'slaptazodis';                          // SMTP username
                      // SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        // $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('testascoding@gmail.com', 'Mailer');
        $mail->addAddress('testascoding@gmail.com', 'Joe User');     // Add a recipient
         $mail->addReplyTo($klientoPastas , 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject2';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
