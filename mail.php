<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$nickname = $_POST['user_nikcname'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$friends = $_POST['friends'];
$another = $_POST['another'];
$school = $_POST['school'];
$organization = $_POST['organization'];
$about_candidat = $_POST['about_candidat'];
$cv = $_POST['cv'];




//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'tkram00@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'goAPRP2f3vr)'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('tkram00@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('taras.kram@humanit.group');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Zgloszenie od klienta';

//$mail->Body    = '' .$name. ' zostawil zgloszenie, numer tefonu: ' .$phone. '<br>adres mailowy: ' .$email. ' tekst zgloszenia: <br>' .$text; //

$mail->Body = '' .$name. ' ' .$surname. ' ' .$phone. ' ' .$email. ' ' .$nickname. ' ' .$instagram. ' ' .$facebook. ' ' .$linkedin. ' ' .$friends. ' ' .$another. ' ' .$school. ' ' .$organization. ' ' .$about_candidat. ' ' .$cv;


$mail->AltBody = '';
if ( $_POST['agree'] == '')
{
echo 'не отмечено';
}
  else {
        if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
 }
?>
