<?php


print_r($_POST);

// !!!! isijungti i ON :
// https://myaccount.google.com/lesssecureapps


print_r( $_POST );
$klientoVardas = $_POST['vardas'];
$klientoPastas = $_POST['pastas'];
$klientoKlausimoAntraste = $_POST['sritis'];
$klientoKlausimas = $_POST['klausimas'];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('Etc/UTC');
    require 'libs/PHPMailer-master/src/Exception.php';
    require 'libs/PHPMailer-master/src/PHPMailer.php';
    require 'libs/PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";


        $mail->Username = 'nbapuslapioprojektas25@gmail.com';
        $mail->Password = 'mokykla123';
        $mail->setFrom('programeriai@gmail.com' 'Nerimas');
        $mail->addAddress('nbapuslapioprojektas25@gmail.com', 'Nerimo vartotojai');     // Add a recipient
         $mail->addReplyTo($klientoPastas , $klientoVardas);
        $mail->isHTML(true);
        $mail->Subject = 'Here is the subject';
        $mail->Body    = '';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Zinute nusiusta';
    } catch (Exception $e) {
        echo "Zinutes nusiusti nepavyko: {$mail->ErrorInfo}";
    }


 ?>
