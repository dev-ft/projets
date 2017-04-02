<?php

require_once 'class/ConnectionManager.php';
session_start();
/**
 * Returns an array with status (int 0->ok) and message json format.
 */
$infos = array();
$infos['status'] = 0;
$infos['message'] = '';

$postData = json_decode($_REQUEST['data'], true);
//error_log(__FILE__ . ' ' . json_encode($_REQUEST));
if ($postData && isset($postData['logintf']) && isset($postData['passwdtf'])) {

    $cm = new ConnectionManager();

    $token = $cm->verifyConnectionPasswd($postData['logintf'], $postData['passwdtf']);
    if ($token) {
        $_SESSION['conn_token'] = $token;
        session_write_close();
        $infos['message'] = $cm->getProtectedPage();
    } else {
        $infos['status'] = 1;
        $infos['message'] = 'Impossible to connect. Login or password invalid.';
    }
} else {
    $infos['status'] = 2;
    $infos['message'] = 'Impossible to connect. Login or password invalid.';
}

echo json_encode($infos);
