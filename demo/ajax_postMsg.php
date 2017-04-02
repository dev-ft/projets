<?php

require_once 'class/DBUserManager.class.php';
require_once 'class/DBForumPost.class.php';
session_start();
/**
 * Returns an array with status (int 0->ok) and message json format.
 */
$postData = json_decode($_REQUEST['data'], true);

$userManager = new DBUserManager();
$user = $userManager->getUserWithToken($_SESSION['conn_token']);
if ($user) {
    $thePost = new ForumPost();
    $thePost->setAuthor($user);

    $thePost->setSubject($postData['subject']);
    $thePost->setContents($postData['msg']);

    $db = new DBForumPost();
    $db->addPost($thePost);
} else {
    error_log(__FILE__ . ' No user !');
}