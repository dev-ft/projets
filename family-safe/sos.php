<?php include('session.inc.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SOS</title>
  <meta charset="utf-8">
  <link href="css/styles_sos.css" rel="stylesheet" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body onload="countdown10s()">

  <!-- START header-navbar ---------------------->
  <div id="header-navbar">
    <div class="header_container">
      <!-- logo -->
      <div id="logo_container">
        <a href="home.php" alt="logo">
          <img id="logo" src="css/images/logo.png"/>
        </a>
      </div>
      <div>
        <h1>Family Safe</h1>
      </div>
    </div>
    <!-- menu icon -->
    <div id="zIndex_menu">
      <div class="menu" onclick="toggleNav(this);">
        <div class="barOne"></div>
        <div class="barTwo"></div>
        <div class="barThree"></div>
      </div>
    </div>
    <!-- IN menu icon: sidenav -->
    <div id="mySidenav" class="sidenav">
      <a href="home.php">Accueil</a>
      <a href="profil.php">Profil</a>
      <a href="poi.php">Points d'intérêts</a>
      <a href="session.disconnect.php">Déconnexion</a>
    </div>
  </div>
  <!-- END header-navbar ---------------------->

  <div id="container_timer">

    <div id="popUp_display">
      <!-- pop up invit -->
      <div id="popUp_invit">
        <!-- close pop up button -->
        <div id="closeButton">
          <i class="fa fa-times cross" onclick="closeInvit()" aria-hidden="true"></i>
        </div>
        <!-- h2 -->
        <div>
          <h2>Assistance</h2>
        </div>
        <div>
          <i class="fa fa-exclamation-circle warning" aria-hidden="true"></i>
        </div>
        <!-- p -->
        <div>
          <p id="send_information">SOS envoyé !</br>Tous vos contacts viennent d'être avertis.</p>
        </div>
        <!-- OK = close window -->
        <div>
          <button id="okButton" onclick="closeInvit()" value="Envoyer">OK</button>
        </div>
      </div>
    </div>

    <div id="h2_timer">
      <h2 id="h2_send">Envoi dans...</h2>
      <h2 id="h2_progress">Envoi en cours...</h2>
      <!-- countdown desactived -->
      <h2 id="h2_stop">Envoi annulé !</h2>
      <!-- active in final countdown -->
      <h2 id="h2_received">Envoi effectué !</h2>
    </div>

    <!-- "p_timer_flex" with "countdown" disappears after the final countdown -->
    <div id="p_timer_flex">
      <p id="countdown"></p>
    </div>
    <div id="loader_flex">
      <div id="loader"></div>
    </div>
    <div id="abort_flex">
      <i class="fa fa-ban abort" aria-hidden="true"></i>
    </div>
    <!-- "sos_send" appears after the final countdown -->
    <div id="sos_send_container" class="cache">
      <i class="fa fa-paper-plane sos_send" aria-hidden="true"></i>
    </div>
    <!-- button -->
    <div id="submit_flex">
      <button id="stopButton" onclick="stopSos(); return false;">Annuler</button>
      <!-- "returnButton" is active in countdown end -->
      <button id="returnButton" onclick="location.href='home.php'">Accueil</button>
    </div>

    <div id="h2_numbers">
      <h2>Numéros d'urgence</h2>
    </div>
  </div>
  <div id="container_information">
    <div class="p_align">
      <a class="number_link" href="tel:112">
        <p id="number_cent_douze">112</p>
        <p id="p_cent_douze">Numéro d'urgence européen</p>
      </a>
    </div>
    <div class="p_align">
      <a class="number_link" href="tel:18">
        <p id="number_dix_huit">18</p>
        <p id="p_dix_huit">Sapeurs-pompiers</p>
      </a>
    </div>
    <div class="p_align">
      <a class="number_link" href="tel:17">
        <p id="number_dix_sept">17</p>
        <p id="p_dix_sept">Police secours</p>
      </a>
    </div>
    <div class="p_align">
      <a class="number_link" href="tel:15">
        <p id="number_quinze">15</p>
        <p id="p_quinze">SAMU</p>
      </a>
    </div>
  </div>

  <!-- countdown 10 s -->
  <script type="text/javascript" src="js/sos_countdown.js"></script>
  <!-- pop up window warning -->
  <script type="text/javascript" src="js/popup_invit.js"></script>
  <!-- icon menu animated -->
  <script type="text/javascript" src="js/menu-icon.js"></script>
</body>
</html>
