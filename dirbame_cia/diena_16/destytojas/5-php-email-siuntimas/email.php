<?php
// print_r( $_POST );
$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];
// echo "  $klientoVardas  $klientoPavarde  <hr /> ";
// echo "  $klientoAntraste  <hr /> $klientoKlausimas   ";
// echo "  <hr /> $klientoPastas   ";

require_once ("libs/PHPMailer-master/PHPMailerAutoload.php");
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

    //Custom connection options
    //Note that these settings are INSECURE
    $mail->SMTPOptions = array(
        'ssl' => [
            'verify_peer' => true,
            'verify_depth' => 3,
            'allow_self_signed' => true,
            'peer_name' => 'tls://smtp.gmail.com:587'
        ],
    );
    $mail->Host = 'smtp.mail.yahoo.com:465';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'darlau8@yahoo.com';                 // SMTP username
    $mail->Password = 'Snietala78';                          // SMTP username
    //Recipients
    $mail->setFrom( 'darlau8@yahoo.com' ,  $klientoVardas);
    $mail->addReplyTo( $klientoPastas, $klientoVardas);     // Add a recipient
    $mail->addAddress( 'testascoding@gmail.com', 'Puslapiu kurejai');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = " <b>Klienatas klausia:</b>   $klientoKlausimas" ;
    $mail->AltBody = " Klieantas klausia: $klientoPastas";
    $mail->send();

    createDoctor($klientoKlausimas, $klientoPastas, $klientoVardas);
    createClientQuestion($klientoKlausimas, $klientoPastas, $klientoVardas);

    echo '<div class="bg-info"> ZINUTE ISSIUSTA SEKMINGAI     </div>';
} catch (Exception $e) {
    echo '<div class="bg-danger"> neveikia     </div>' . $mail->ErrorInfo;
}
