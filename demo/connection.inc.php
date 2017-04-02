<?php
require_once 'class/ConnectionManager.php';

session_start();


$cm = new ConnectionManager();

if (!isset($_SESSION['conn_token']) || false === $cm->isValidConnection($_SESSION['conn_token'])) {
    header('Location: '.$cm->getWebroot());
}
