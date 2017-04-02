<?php
require_once('vendor/PHPMailer/PHPMailerAutoload.php');

$data = json_decode($_REQUEST['infos'], true);
$email = $data['email'];

$destEmail = null;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $destEmail = $email;
} else {
  echo('1');
  exit();
}

$from = "Family Safe";
$exp = 'dl.family.safe@gmail.com';
$pass ='lenovog50';
$dests = [$destEmail];
$destsBcc = ['dl_huet@mode83.net'];

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $exp;
$mail->Password = $pass;
$mail->setFrom($exp, $from);

$mail->Subject = "Invitation";
$mail->Body = "<h1>hello</h1>";


foreach ($dests as $d) {
    $mail->addAddress($d);
}
foreach ($destsBcc as $d) {
    $mail->addBCC($d);
}

$debug = false;
if ($debug==false) {
  if(!$mail->Send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
     exit();
  }

}else {
  error_log(__FILE__.' debug active');
}


 echo '0';
