<!-- openning time of session -->
<?php include('session.inc.php');?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <link href="css/styles_home.css" rel="stylesheet" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- google maps api -->
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6ejkmRdVZoxVRouPP5qgU1ycbmTjG7nY&callback=initMap">
  </script>
</head>
<body>

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
    <div id="userANDmenu">
      <i class="fa fa-circle connected" aria-hidden="true"></i>

        <div id="userName">
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
                  echo $data[0]['firstname'];
              }
          } catch (Exception $e) {
              echo $e->getMessage();
          }
        ?>
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
  </div>

  <!-- END header-navbar ---------------------->

  <!-- google maps -->

  <div id="map"></div>

  <div id="popUp_display">
    <!-- pop up invit -->
    <div id="popUp_invit">
      <!-- close pop up button -->
      <div id="closeButton">
        <i class="fa fa-times closeBtn" onclick="closeInvit()" aria-hidden="true"></i>
      </div>
      <!-- h2 -->
      <div>
        <h2>Invitation</h2>
      </div>
      <!-- p -->
      <div>
        <p id="send_instruction">Pour envoyer une invitation à un contact,</br>saisissez son courriel ci-dessous.</p>
      </div>
      <form id="indexForm" onsubmit="return false;" method="post">
        <!-- email -->
        <div>
          <input id="email" type="email" name="email" placeholder="Courriel du contact" required/>
        </div>
        <!-- send button -->
        <div>
          <button  id="submitButton" onclick="emailSend(document.getElementById('indexForm'))" value="Envoyer">Envoyer </button>
        </div>
      </form>
    </div>
  </div>

  <!-- START footer-navbar ---------------------->
  <div id="footer-navbar">
    <!-- sos button -->
    <div>
      <a href="sos.php">
        <div id="sos">SOS</div>
      </a>
    </div>
    <!-- user main connected -->
    <div>
      <div id="mainUser" onclick="setCenter_user()">Me</div>
    </div>
    <!-- contacts of main user -->
    <div>
      <div id="contactOne">1</div>
    </div>
    <!-- view all contact -->
    <div>
      <div id="allContact">...</div>
    </div>
    <!-- add an contact -->
    <div>
      <div id="addContact" onclick="openInvit()">+</div>
    </div>
  </div>

  <!-- END footer-navbar ---------------------->

  <!-- icon menu animated -->
  <script type="text/javascript" src="js/menu-icon.js"></script>
  <!-- google maps -->
  <script type="text/javascript" src="js/google-maps.js"></script>
  <!-- pop up window invitation -->
  <script type="text/javascript" src="js/popup_invit.js"></script>
  <!-- invitation -->
  <script type="text/javascript" src="js/invit.js"></script>
</body>
</html>
