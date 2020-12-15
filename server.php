<?php
$db = mysqli_connect('emmahn.dk.mysql', 'emmahn_dk', '3QtACGAfPK5gZNJSwMmH3UJD', 'emmahn_dk');

// signup query
if (isset($_POST['navn'])) {
   $navn = mysqli_real_escape_string($db, $_POST['navn']);
   $email    = mysqli_real_escape_string($db, $_POST['email']);
   $adresse  = mysqli_real_escape_string($db, $_POST['adresse']);
   $postnr   = mysqli_real_escape_string($db, $_POST['postnr']);
   $dato    = mysqli_real_escape_string($db, $_POST['dato']);
   $antal_timer    = mysqli_real_escape_string($db, $_POST['antal_timer']);
   $menu    = mysqli_real_escape_string($db, $_POST['menu']);
   $antal    = mysqli_real_escape_string($db, $_POST['antal']);
   $kommentar    = mysqli_real_escape_string($db, $_POST['kommentar']);

// query til at gemme det i databasen 
  $query = "INSERT INTO booking_system (navn,email,adresse,postnr,dato,antal_timer,menu,antal,kommentar) 
  VALUES('$navn','$email','$adresse','$postnr','$dato','$antal_timer','$menu','$antal','$kommentar')";
  $db->query($query);
  //echo $query; 
  //exit; 
}

?>
