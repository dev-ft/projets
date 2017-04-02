<!-- openning time of session -->
<?php include('session.inc.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Profil</title>
  <meta charset="utf-8">
  <link href="css/styles_profil.css" rel="stylesheet" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div id="container">
    <div id="h2_flex">
      <h2>Vos coordonnées</h2>
    </div>
    <div id="accordion_container">
      <button class="accordion">Courriel</button>
      <div class="panel">
        <div id="email_flex">
          <input id="email" type="email" name="email" placeholder="Courriel" required/>
        </div>
      </div>

      <button class="accordion">Section 2</button>
      <div class="panel">
        v
      </div>

      <button class="accordion">Section 3</button>
      <div class="panel">
        d
      </div>
    </div>
  </div>
  <!-- accordion -->
  <script type="text/javascript" src="js/accordion.js"></script>
  <!-- icon menu animated -->
  <script type="text/javascript" src="js/menu-icon.js"></script>
</body>
</html>
