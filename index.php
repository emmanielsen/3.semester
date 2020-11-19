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
      
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Playball&display=swap" rel="stylesheet">
        <title> Bestil her</title>
    </head>
<body>

    <div class="container">
        <div class="inserts">
            <h1> Bestil Her </h1>
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
