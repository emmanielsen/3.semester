<?php
// CREATE DATABASE(db) CONNECTION
$db = mysqli_connect('localhost', 'root', '', 'reservation') or die("connection failed" . mysqli_error);
//SELECT FORM FIELD DATA
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($db, $_POST['username'])
  $email = mysqli_real_escape_string($db, $_POST['email'])
  $adresse = mysqli_real_escape_string($db, $_POST['adresse'])
  $postnr = mysqli_real_escape_string($db, $_POST['postnr'])
  $dato = mysqli_real_escape_string($db, $_POST['dato'])
  $frakl = mysqli_real_escape_string($db, $_POST['frakl'])
  $tilkl = mysqli_real_escape_string($db, $_POST['tilkl'])
  $menu = mysqli_real_escape_string($db, $_POST['menu'])
  $howmuch = mysqli_real_escape_string($db, $_POST['howmuch'])
  $kommentar = mysqli_real_escape_string($db, $_POST['kommentar'])
}
 ?>
