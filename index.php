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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Playball&display=swap" rel="stylesheet">
        <title> Bestil her</title>
    </head>
<body>

<!-- menu linje med en horizontal navigation menu -->
<nav class="booking-nav-php">
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

<a class="tilbage" href="index.html"> Tilbage </a>

<!----- booking systemet -->

    <div class="container">
        <div class="inserts">
            <h1 class="bestil"> Bestil Her </h1>
            <form action="godkendt.html" method="post">
                <input type="text" name="navn" placeholder="Navn" required=""> <br>
                <input type="email" name="email" placeholder="Email" required=""> <br>
                <input type="text" name="adresse" placeholder="Adresse" required=""> <br>
                <input type="text" name="postnr" placeholder="Postnr." required=""> <br>
                <input type="date" name="dato" placeholder="Dato for udlejning" required=""> <br>
                <input type="text" name="antal_timer" placeholder="Antal timer" required=""> <br>
                <input type="text" name="menu" placeholder="Valg af menu" required=""> <br>
                <input type="text" name="antal" placeholder="Antal gæster" required=""> <br>
                <input type="text" name="kommentar" placeholder="Kommentar" required=""> <br>
                <br>

                <input type="submit" name="submit" value="Bestil" href="godkendt.html">
            </form>
        </div>
    </div>
</body>
<footer class="footer-distributed-php">

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
  </html>
