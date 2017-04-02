<?php
/* If we come from a mail, we have a code */
// http://www.test.fr/subscribe.php?code=XXXXX

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Inscription</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles_subscribe.css"/>
  <script type="text/javascript" src="js/subscribe_errors.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <div class="a_flex">
    <a href="index.html" id="logo_align">
      <img id="logo" src="css/images/logo.png"/>
    </a>
  </div>
  <div class="h_flex">
    <h1>Family Safe</h1>
  </div>
  <div class="h_flex">
    <h2>Votre famille en sécurité</h2>
  </div>
  <div id="normal_form">
    <form id="subscribeForm" onsubmit="subscribe(this); return false;">
      <div class="fName_flex">
        <input id="firstname" placeholder="Prénom" type="text" name="firstname" required/>
      </div>
      <div class="lName_flex">
        <input id="lastname" placeholder="Nom" type="text" name="lastname" required/>
      </div>
      <div class ="email_flex">
        <input id="email" placeholder="Courriel" type="email" name="email" required/>
      </div>
      <div class="phone_flex">
        <input id="telephone_number" placeholder="Téléphone mobile" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="telephone_number" required/>
      </div>
      <div class="password_flex">
        <input id="password" placeholder="Mot de passe" type="password" name="password" required/>
      </div>
      <div class="password_confirm_flex">
        <input id="password_confirm" placeholder="Confirmez le mot de passe" type="password" name="password_confirm" required/>
      </div>
      <div id="error_message"></div>
      <div class="submit_flex">
        <input id="submit" type="submit" value="Confirmer"/>
      </div>
      <div class="connexion_flex">
        <p class="connexion_question">
          Déjà membre ?
          <a href="index.html" class="connexion">
            Connexion
          </a>
        </p>
      </div>

      <input type="hidden" name="mailCode" value="<?php if (isset($_REQUEST['code'])) {echo $_REQUEST['code'];} ?>"/>

    </form>
  </div>
  <div id="continue">
    <div id="fa_flex">
      <i class="fa fa-check-circle" aria-hidden="true"></i>
    </div>
    <div id="subscribe_validate_flex">
    <p id="subscribe_validate">
      Votre Inscription a bien été effectuée.
    </p>
    </div>
    <div id="continue_text_flex">
      <a id="continue_text" href="home.php">Continuer</a>
    </div>
  </div>
</body>
</html>
