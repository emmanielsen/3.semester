<?php
    include "server.php";
?>

<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/anden.css" type="text/css">
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
<a href="index.html"> <img src="img/lillelogo_taffel.png" alt="taffelvognens logo" class="logo"> </a>
</nav>

<button class="tilbage-btn" onclick="goBack()">Tilbage</button>

<!--booking systemet -->

    <div class="container">
        <div class="inserts">
            <h1 class="bestil"> Personlinge oplysninger </h1>
            <form action="" method="post">
                <input type="email" name="mail" placeholder="Email" required=""> <br>
                <input type="text" name="firstname" placeholder="Fornavn" required=""> <br>
                <input type="text" name="lastname" placeholder="Efternavn" required=""> <br>
                <input type="text" name="streetname" placeholder="Gadenavn" required=""> <br>
                <input type="text" name="streetnr" placeholder="Gadenr." required=""> <br>
                <input type="text" name="zip" placeholder="Postnr." required=""> <br>
                <br>
                <input type="submit" name="submit" value="Indsend">
            </form>
        </div>
    </div>

    <div class="container">
        <div class="inserts">
            <h1 class="bestil"> Bestil Her </h1>
            <form action="" method="post">
                <input type="text" name="menuid" placeholder="Menuid" required=""> <br>
                <input type="text" name="guests" placeholder="Hvor mange gæster" required=""> <br>
                <input type="text" name="date" placeholder="Dato" required=""> <br>
                <input type="text" name="time" placeholder="Tidsrum fra og til" required=""> <br>
                <input type="text" name="comment" placeholder="Kommentar" required=""> <br>
                <br>

                <label class="nyhed">Privat 
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="nyhed">Erhverv 
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <br> 
                <br>
                <label class="nyhed">Ja tak til nyhedsbrev! 
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>

                <input type="submit" name="submit" value="Bestil">

                
            </form>
            
        </div>
    </div>



    <footer class="footer-distributed-php">

    <div class="footer-right">
      <a href="https://www.facebook.com/Taffelvognen">
        <img alt="facebook logo" src="img/fblogo.png">
    </a>

      <a href="https://www.instagram.com/taffel_vognen/">
        <img alt="instagram logo" src="img/iglogo.jpg">
    </a>
        </div>

    <div class="footer-left">
      <p>Taffelvognen &copy; 2019</p>
    </div>

  </footer>

  <script src="index.js"></script>
</body>
</html>
