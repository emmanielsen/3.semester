<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "newbooking";

// Create connection
$db = new mysqli($servername, $username, $password, $database);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
// echo "Connected successfully";

// entitet costumer
if (isset($_POST['customer'])) {
   $mail = mysqli_real_escape_string($db, $_POST['mail']);
   $firstname    = mysqli_real_escape_string($db, $_POST['firstname']);
   $lastname  = mysqli_real_escape_string($db, $_POST['lastname']);
   $streetname  = mysqli_real_escape_string($db, $_POST['streetname']);
   $streetnr    = mysqli_real_escape_string($db, $_POST['streetnr']);
   $zip    = mysqli_real_escape_string($db, $_POST['zip']);

// query til at gemme det i databasen 
  $query = "INSERT INTO customer (mail,firstname,lastname,streetname,streetnr,zip) 
  VALUES('$mail','$firstname','$lastname','$streetname','$streetnr','$zip')";
  $db->query($query);
}

// entitet booking 
if (isset($_POST['booking'])) {
  $bookingnr = mysqli_real_escape_string($db, $_POST['bookingnr']);
  $menuid    = mysqli_real_escape_string($db, $_POST['menuid']);
  $guests = mysqli_real_escape_string($db, $_POST['guests']);
  $mail  = mysqli_real_escape_string($db, $_POST['mail']);
  $date    = mysqli_real_escape_string($db, $_POST['date']);
  $time    = mysqli_real_escape_string($db, $_POST['time']);
  $comment  = mysqli_real_escape_string($db, $_POST['comment']);

// query til at gemme det i databasen 
 $query = "INSERT INTO booking (bookingnr, menuid, guests, mail, date, time, comment) 
 VALUES('$bookingnr','$menuid','$guests','$mail','$date','$time','$comment')";
 $db->query($query);
}


// entitet menu
if (isset($_POST['menu'])) {
  $menuid = mysqli_real_escape_string($db, $_POST['menuid']);
  $menuname    = mysqli_real_escape_string($db, $_POST['menuname']);

// query til at gemme det i databasen 
 $query = "INSERT INTO menu (menuid, menuname) 
 VALUES('$menuid','$menuname')";
 $db->query($query);
}

// entitet city 
if (isset($_POST['city'])) {
  $zip = mysqli_real_escape_string($db, $_POST['zip']);
  $city    = mysqli_real_escape_string($db, $_POST['city']);

// query til at gemme det i databasen 
 $query = "INSERT INTO city (zip, city) 
 VALUES('$zip','$city')";
 $db->query($query);
}


?>
