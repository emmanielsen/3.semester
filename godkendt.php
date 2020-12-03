<?php 
    session_start();
    include "server.php";
?>

<style>
   <?php include "css/anden.css"; ?> 
</style>

<script> 
    <?php include "index.js"; ?>
</script>

<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/anden.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Playball&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zeyada&display=swap" rel="stylesheet">
        <meta name="description" content="Taffelvognen er en hyggelig foodtruck med en bred menu bestående
        af økologiske råvarer bragt fra lokal catering. Perfekt til dig der ønsker nem mad og et festligt indslag
        til dit arrangement. Lej Taffelvognen her."/>
        <script src="index.js" defer></script>
        <title> Godkendt </title>
    </head>
<body>

<!-- menu linje med en horizontal navigation menu -->
<nav>
<div class="burger-menu-btn" onclick="myFunction(this); toogleSlideMenu(this);">
    <div class="burger-menu-bar-1"></div>
    <div class="burger-menu-bar-2"></div>
    <div class="burger-menu-bar-3"></div>
  </div>
  <div id="burger-menu" class="side-nav">
      <a href="index.html"> <b>FORSIDE</b> </a>
      <br>
      <a href="index.php"> <b>BESTIL</b> </a>
      <br>
      <a href="index.html"> <b>SE MENUER</b> </a>
      <br>
      <a href="om.html"> <b>OM OS</b> </a>
      <br>
      <a href="kontakt.html"> <b>KONTAKT</b> </a>
  </div>


<!-- LOGO -->

<img src="img/lillelogo_taffel.png" alt="taffelvognens logo" class="logo">
</nav>
<a class="tilbage" href="#box"> Tilbage </a>

<div class="citater">
        <h1 class="tak"> TAK </h1>
        <p class="citat-tekst-tak"> Tak for din bestilling. <br>
            <br> Det betyder meget for os, at du har valgt lige netop os. 
            <br> Vi vil gøre alt for at dit arrangement bliver uforglemmeligt. <br>
            <br> Vi glæder os til at se jer. <br> Taffelvognen
        </p>
        <p class="underskrift"> Lene Ellebæk </p>
</div>

<footer class="footer-distributed">

    <div class="footer-right">
      <a href="https://www.facebook.com/Taffelvognen">
        <img alt="facebook logo" src="img/fblogo.png">
    </a>

      <a href="https://www.instagram.com/taffelvognen/">
        <img alt="instagram logo" src="img/iglogo.jpg">
    </a>
        </div>

    <div class="footer-left">
      <p>Taffelvognen &copy; 2019</p>
    </div>

  </footer>
</body>
</html>