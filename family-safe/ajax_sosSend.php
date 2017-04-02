<?php
require_once('db/cryptText.php');
require_once('vendor/PHPMailer/PHPMailerAutoload.php');
session_start();

$mail = decryptText("HuetEstMonMotDePasse", $_SESSION['token']);

// Connect to db
require_once('db/DbTool.class.php');
$tool = new DbTool();
$db = $tool->connectToDb();

// Request to db
$query = 'SELECT `guest` FROM `friends` WHERE `host`='.$db->quote($mail).' AND `accepted`=1';
error_log(__FILE__." $query");
//$query = 'SELECT `guest` FROM `friends` WHERE `host`="dl_huet@mode83.net" AND `accepted`=1';

try {
  $sth = $db->query($query);
  $data = $sth->fetchAll();

  $allFriends = [];
  foreach ($data as $line) {
      //echo "Envoyer un mail à ".$line['guest'];
      error_log(__FILE__." Send mail to ".$line['guest']);
      $allFriends[] = trim(utf8_decode($line['guest']));
  }

  // send $allFriends to dest in phpmailer
  if (count($allFriends)) {
    sendMail($allFriends, $mail);
 }
}
catch (Exception $exc) {
  die('Erreur : '.$exc->getMessage());
}

function sendMail($inFriendList, $expeditor) {
  $from = "Family Safe";
  $exp = 'dl.family.safe@gmail.com';
  $pass ='lenovog50';

  $dests = [];
  $list = $inFriendList;
  $list[] = 'dl_huet@mode83.net';
  $destsBcc =$list;

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

  $mail->Subject = "SOS - $expeditor";
  $mail->Body = utf8_decode("<h1>Warning</h1><p>This user($expeditor) sends an SOS. Please connect to the website and check if user is OK.</p>");


  foreach ($dests as $d) {
      $mail->addAddress($d);
      error_log(__FILE__.' '.__FUNCTION__." addAddress ".$d);
  }
  foreach ($destsBcc as $d) {
      $mail->addBCC($d);
      error_log(__FILE__.' '.__FUNCTION__." addBCC ".$d);
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

}
