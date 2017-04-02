<?php
require_once('cryptText.php');

// Connect to db
require_once('DbTool.class.php');
$tool = new DbTool();
$db = $tool->connectToDb();

// Request to db
$query = 'SELECT `email` FROM `users` WHERE `email`=' . $db->quote($email);

try {
    $sth = $db->query($query);
    $data = $sth->fetchAll();

    /* Determines if the variable is set and is not NULL */
    if (isset($data[0])) {
        /* Verify that the password matches the hash */
        if (password_verify($pass, $data[0]["password"])) {
            /* if correct password */
            session_start();
            $_SESSION["start_time"] = time();

            $crypte = encryptText('HuetEstMonMotDePasse',  $data[0]["email"]);
            $_SESSION['token'] = $crypte;
            // $_SESSION['token'] = $data[0]["email"];
            session_write_close();
            echo "0";
            exit();
        } else {
            // wrong password
            echo "12";
        }
    } else {
        // wrong mail
        echo "13";
    }
} catch (Exception $exc) {
    echo "10"; /* Query error */
    exit();
}
