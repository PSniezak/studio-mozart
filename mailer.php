<?php
date_default_timezone_set('Europe/Paris');
require_once 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->SMTPDebug =0;
  $mail->SingleTo   = true;
  $mail->CharSet    = "UTF-8";

  $mail->Debugoutput = 'html';

  $mail->Host = 'smtp.gmail.com';

  $mail->Port = 465;

  $mail->SMTPSecure = 'ssl';

  $mail->SMTPAuth = true;

  $mail->Username = "studio.mozart.mailer@gmail.com";
  $mail->Password = "Z89cb/HExCj*RWJo";
  $mail->setFrom('studio.mozart.mailer@gmail.com', 'Studio Mozart - Mailer');

  $mail->addAddress('contact@atroistudio.com', 'Atrois Studio');

  $mail->Subject = "Studio Mozart - Demande de r&eacute;servation";
  $mail->Body    = "Prix : ".substr($_POST['price'], 0, 3)." €<br>Nom : ".$_POST['name']."<br>Email : ".$_POST['email']."<br>T&eacute;l&eacute;phone : ".$_POST['tel']."<br>Date : ". date("d M, Y", strtotime($_POST['date']));
  $mail->AltBody = "Prix : ".substr($_POST['price'], 0, 3)." €<br>Nom : ".$_POST['name']."<br>Email : ".$_POST['email']."<br>T&eacute;l&eacute;phone : ".$_POST['tel']."<br>Date : ". date("d M Y", strtotime($_POST['date']));

  if ($mail->send()) {
    $mail->ClearAddresses();
  }
}
