<?php
$db = mysqli_connect('localhost', 'root', 'booking', 'booking_system');

// signup query
if (isset($_POST['submit'])) {
   $navn = mysqli_real_escape_string($db, $_POST['navn']);
   $email    = mysqli_real_escape_string($db, $_POST['email']);
   $adresse  = mysqli_real_escape_string($db, md5($_POST['adresse']));
   $postnr   = mysqli_real_escape_string($db, md5($_POST['postnr.']));

// query til at gemme det i databasen 
  $query = mysqli_query($db, "INSERT INTO users(navn,email,adresse,postnr,dato,tidsrum_fra,tidsrum_til,antal,kommentar") VALUES('$navn','$email','$adresse','$postnr','$dato','$tidsrum_fra','$tidsrum_til','$antal','$kommentar');

  if ($query) {
    $_SESSION['succes'] ="Din reservation er blevet sendt til Taffelvognen";
    $_SESSION['id'] = $db- >inser_id;
    header('location: index.php');
    exit();
  } else {
      $_SESSION['error'] = "Undskyld der er sket en fejl"; 
  }

// authentication
   if($password1 !== $password2) {
      array_push($errors, 'Passwords do not match!');
      header('location: demo.php');
      exit();
   }

//    VALIDATION
   $check_query = "SELECT email FROM users WHERE email = '$email' "; 
   $returns = mysqli_query($db, $check_query);
      if (mysqli_num_rows($returns) > 0) {
          array_push($errors, 'This User Email already exists');
              header('location: demo.php');
              exit();
      } else {
          $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password1') ";
          $return = mysqli_query($db, $query);
          if ($return) {
              $new_user = mysqli_fetch_all($return, MYSQLI_ASSOC);
              $_SESSION['new_id'] = $db->$insert_db;
          }

        }

        $query = "SELECT * FROM users WHERE id = " . $_SESSION['new_id'];
        $return_result = mysqli_query($db, $query);

        if ($return_result) {
            if ($mysqli_num_rows($return_result) > 0) {
                $new_user = mysqli_fetch_all($return_result, MYSQLI_ASSOC);
                $_SESSION['username'] = $new_user['username'];
                $_SESSION['email'] = $new_user['email'];
                $_SESSION['success'] = "Great!! You are now a member here! Your Email is: " . $_SESSION['email'];
                header('location: index.php');
                exit();
            }
        }

   
}

 ?>
