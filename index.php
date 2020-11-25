<?php 
    session_start();
    include "server.php";
?>

    <style>
   <?php include "css/anden.css"; ?> 
    </style>


<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="index.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Playball&display=swap" rel="stylesheet">
        <title> Bestil her</title>
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

<a class="tilbage" href="index.html"> Tilbage </a>

<!----- booking systemet -->

    <div class="container">
        <div class="inserts">
            <h1 class="bestil"> Bestil Her </h1>
            <form action="" method="post">
                <input type="text" name="navn" placeholder="Navn" required=""> <br>
                <input type="email" name="email" placeholder="Email" required=""> <br>
                <input type="text" name="adresse" placeholder="Adresse" required=""> <br>
                <input type="text" name="postnr" placeholder="Postnr." required=""> <br>
                <input type="date" name="dato" placeholder="Dato for udlejning" required=""> <br>
                <input type="text" name="tidsrum_fra" placeholder="Tidsrum fra" required=""> <br>
                <input type="text" name="tidsrum_til" placeholder="Tidsrum til" required=""> <br>
                <input type="text" name="antal" placeholder="Antal gæster" required=""> <br>
                <input type="text" name="kommentar" placeholder="Kommentar" required=""> <br>
                <br>

                <input type="submit" name="submit" value="Bestil">
            </form>
        </div>
    </div>
</body>
