<?php
  $host ="localhost"; //host server
  $user ="root"; //user login phpMyAdmin
  $pass ="root"; //pass login phpMyAdmin
  $db ="input_form"; //nama database
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
?>