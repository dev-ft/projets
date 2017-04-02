<?php
require_once('DbTool.class.php');
$theRequest = json_decode($_REQUEST['infos'], true);

/*
Params:
'firstname'
 'lastname'
 'email'
 'telephone_number'
 'password'
 'password_confirm'
 'mailCode'
*/


/*
  Error Codes documentation :
  0-> no Error
  100-> Query error
  101-> DB Connection impossible
  102-> password and password confirm different or illegal characters
  103-> account already exists
  105 -> invitation failed
*/

$query = NULL;

$fName = filter_var($theRequest['firstname'],FILTER_SANITIZE_STRING);
$lName = filter_var($theRequest['lastname'],FILTER_SANITIZE_STRING);
$email = filter_var($theRequest['email'],FILTER_SANITIZE_EMAIL);
$phone = filter_var($theRequest['telephone_number'],FILTER_SANITIZE_STRING);
$pass = filter_var($theRequest['password'],FILTER_SANITIZE_STRING);
$pass_confirm = $theRequest['password_confirm'];

$allVar = array($fName, $lName, $email, $phone, $pass, $pass_confirm);

foreach ($allVar as $value) {
  if(strlen($value)==0) {
    exit();
  }
}

$options = [
  'cost' => 13,
];

$hash = password_hash($pass, PASSWORD_BCRYPT, $options);

if ($pass == $pass_confirm){
  if (doesUserExist($email)==false) {

    $tool = new DbTool();
    $db = $tool->connectToDb();
    if (!$db) {
      echo "101";
      exit();
    }

    $query = 'INSERT INTO `users` (`firstname`, `lastname`, `email`,`telephone_number`, `password`) VALUES(';
    $query .= $db->quote($fName) . ', ';
    $query .= $db->quote($lName) . ', ';
    $query .= $db->quote($email) . ', ';
    $query .= $db->quote($phone) . ', ';
    $query .= $db->quote($hash) . ')';
    try {
      $db->query($query);

      if (isset($theRequest['mailCode']) && strlen($theRequest['mailCode'])>0) {
        // It's an invitation
        //echo $query;
        $query = 'UPDATE friends SET accepted=1 WHERE code = ' . $db->quote($theRequest['mailCode']);
          //a vérifier
          try {
            $db->query($query);
          }
          catch (Exception $exc) {
            echo "105";
            exit();
          }
      }

      echo "0";
      exit();
    }
    catch (Exception $exc) {
      error_log(__FILE__.' '.__FUNCTION__.' '.$query);

      echo "100";
      exit();
    }
  } else {
    // account already exist.
    echo "103";
    exit();
  }
} else {
  // password and confirmationnn are NOT equal
  echo '102';
  exit();
}
// must not happen
echo "199";
exit();

/*
This function checks if the email address already exists.
*/
function doesUserExist($inEmail){

  $tool = new DbTool();
  $db = $tool->connectToDb();

  $email = htmlentities($inEmail);
  $query = 'SELECT email FROM users WHERE email = '.$db->quote($email).';';
  $sth = $db->query($query);
  $result = $sth->fetchAll();

  if (count($result) >= 1)  {
    return true;
  }
  return false;
}
