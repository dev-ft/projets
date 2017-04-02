<?php
  require_once('db/cryptText.php');
  require_once('db/DbTool.class.php');
  $tool = new DbTool();
  $db = $tool->connectToDb();

  $mail = decryptText('HuetEstMonMotDePasse', $_SESSION['token']);
  $query = 'SELECT `firstname` FROM `users` WHERE `email`='.$db->quote($mail);

  try {
    $sth = $db->query($query);
    $data = $sth->fetchAll();

      if (count($data) && isset($data[0]['firstname'])) {
        $query = 'UPDATE `users` WHERE `latitude` SET `` ';
        try {
          $sth = $db->query($query);
          $data = $sth->fetchAll();
        }
        catch (Exception $e) {
          echo $e->getMessage();
        }
      }
    }
    catch (Exception $e) {
      echo $e->getMessage();
  }
?>
