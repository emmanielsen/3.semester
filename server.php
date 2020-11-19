<?php
$db = mysqli_connect('localhost', 'root', 'root', 'booking');

// signup query
if (isset($_POST['navn'])) {
   $navn = mysqli_real_escape_string($db, $_POST['navn']);
   $email    = mysqli_real_escape_string($db, $_POST['email']);
   $adresse  = mysqli_real_escape_string($db, $_POST['adresse']);
   $postnr   = mysqli_real_escape_string($db, $_POST['postnr']);
   $dato    = mysqli_real_escape_string($db, $_POST['dato']);
   $tidsrum_fra    = mysqli_real_escape_string($db, $_POST['tidsrum_fra']);
   $tidsrum_til    = mysqli_real_escape_string($db, $_POST['tidsrum_til']);
   $antal    = mysqli_real_escape_string($db, $_POST['antal']);
   $kommentar    = mysqli_real_escape_string($db, $_POST['kommentar']);

// query til at gemme det i databasen 
  $query = mysqli_query($db, "INSERT INTO booking_system (navn,email,adresse,postnr,dato,tidsrum_fra,tidsrum_til,antal,kommentar) 
  VALUES('$navn','$email','$adresse','$postnr','$dato','$tidsrum_fra','$tidsrum_til','$antal','$kommentar')") or die(mysqli_error($db));

  if ($query) {
    $_SESSION['succes'] ="Din reservation er blevet sendt til Taffelvognen";
    $_SESSION['id'] = $db->insert_id;
    header('location: index.php');
    exit();
  } else {
      $_SESSION['error'] = "Undskyld der er sket en fejl"; 
  }
}

?>
