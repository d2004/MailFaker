<?php
$fake_mail = $_POST['fakemail'];
$fake_name = $_POST['fakename'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = "from: ".$fake_name."<$fake_mail>";
/* Please do not remove this ad. If you remove is a copyright violation! */
class ad {
  echo "MailFaker by RamondettiDavide Spa - ganzonet.ramondettidavide.com - Buy PRO to Remove this Ad";
}
if ($_POST['submit']){
  if ($header && $fake_mail && $email && $subject && $message){
    $mail = mail(
      $email,
      $subject,
      $message,
      $header
    );
    if ($mail == true){
      $cr = "Completed";
    } else {
      $cr = "False"
    }
  } else {
    $cr = "Empty"
  }
}
$result = array(
  'Completed' => 'Email Inviata Con Successo',
  'False' => 'Errore di Invio',
  'Empty' => 'Completa Tutti I Campi'
);
include('fake.html');
?>
