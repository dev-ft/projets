<?php
session_start();
session_write_close();

$delta = time() - $_SESSION['start_time'];
if ($delta>3600) {
  unset($_SESSION['start_time']);
  unset($_SESSION['token']);
  header('Location: index.html');
  exit();
}
?>
