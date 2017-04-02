<!-- openning time of session -->
<?php include('session.inc.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <link href="css/styles_profil.css" rel="stylesheet" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
  <!-- __________START header-navbar__________ -->
  <div id="header-navbar">
    <!-- logo -->
    <div id="logo_flex">
      <a href="home.php" alt="logo">
        <img id="logo" src="css/images/logo.png"/>
      </a>
    </div>
    <div id="h_flex">
      <h1>Family Safe</h1>
    </div>
    <!-- menu icon -->
    <div id="container_menu" onclick="myFunction(this)">
      <div class="barOne"></div>
      <div class="barTwo"></div>
      <div class="barThree"></div>
    </div>
    <!-- IN menu icon: sidenav -->
    <div id="mySidenav" class="sidenav">
      <a href="#" class="closebtn" onclick="closeNav(); return false;">&times;</a>
      <a href="home.php">Accueil</a>
      <a href="profil.php">Profil</a>
      <a href="poi.php">Points d'intérêts</a>
      <a href="session.disconnect.php">Déconnexion</a>
    </div>
  </div>
  <div id="create">
    <h2>Page POI en cours de conception</h2>
  </div>
  <!-- __________END header-navbar__________ -->

  <!-- icon menu animated -->
  <script type="text/javascript" src="js/menu-icon.js"></script>
</body>
</html>
