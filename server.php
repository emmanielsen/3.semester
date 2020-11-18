<?php
$db = mysqli_connect('localhost', 'root', 'booking', 'booking_system');

// signup query
if (isset($_POST['submit'])) {
   $navn = mysqli_real_escape_string($db, $_POST['navn']);
   $email    = mysqli_real_escape_string($db, $_POST['email']);
   $adresse  = mysqli_real_escape_string($db, md5($_POST['adresse']));
   $postnr   = mysqli_real_escape_string($db, md5($_POST['postnr.']));

// query til at gemme det i databasen 
  $query = mysqli_query($db, "INSERT INTO users(navn,email,adresse,postnr,dato,tidsrum_fra,tidsrum_til,antal,kommentar) 
  VALUES('$navn','$email','$adresse','$postnr','$dato','$tidsrum_fra','$tidsrum_til','$antal','$kommentar')") ;

  if ($query) {
    $_SESSION['succes'] ="Din reservation er blevet sendt til Taffelvognen";
    $_SESSION['id'] = $db -> inser_id;
    header('location: index.php');
    exit();
  } else {
      $_SESSION['error'] = "Undskyld der er sket en fejl"; 
  }
}

 ?>
