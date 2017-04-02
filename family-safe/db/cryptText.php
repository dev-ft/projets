<?php

/* ----- TEST -----

session_start();
echo '<pre>';
var_dump($_SESSION);

$test = 'le texte à chiffre';
  $c = encryptText('toto', $test);
  echo "<hr>$c";
  $d = decryptText('toto', $c);
echo "<hr>$d";

------------------- */

function encryptText($pass, $plaintext)
{
    $key = str_pad($pass, 32, "\0", STR_PAD_RIGHT);
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);

    $ciphertext = $iv . $ciphertext;
    return base64_encode($ciphertext);
}

function decryptText($pass, $ciphertext_base64)
{
    $key = str_pad($pass, 32, "\0", STR_PAD_RIGHT);
    $ciphertext_dec = base64_decode($ciphertext_base64);
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);



    $iv_dec = substr($ciphertext_dec, 0, $iv_size);

    # Récupère le texte du cipher (tout, sauf $iv_size du début)
    $ciphertext_dec = substr($ciphertext_dec, $iv_size);

    # On doit supprimer les caractères de valeur 00h de la fin du texte plein
    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);

    // remove trailing \0
    return str_replace("\0", '', $plaintext_dec) ;
}
