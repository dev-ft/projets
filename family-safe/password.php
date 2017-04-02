<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mot de passe oublié</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/styles_password.css"/>
        <script type="text/javascript" src="js/password_errors.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <div class="h_flex">
        <p id="instruction">Entrez ci-dessous le courriel que vous utilisez pour vous connecter. Vous recevrez par courriel les instructions pour récupérer votre mot de passe.</p>
      </div>

      <form id="indexForm" onsubmit="return false;" method="post">
        <div id="email_flex">
          <input id="email" type="email" name="email" placeholder="Courriel" required/>
        </div>

        <div id="error_message"></div>

        <!-- send button -->
        <div id="submit_flex">
          <button id="submitButton" onclick="emailSend(document.getElementById('indexForm'))">Envoyer</button>
        </div>
      </form>


      <div class="connect_flex">
        <p class="connect_question">
          Courriel retrouvé ?
          <a href ="index.html" class="connect">
            Connexion
          </a>
        </p>
      </div>

    </body>
</html>
