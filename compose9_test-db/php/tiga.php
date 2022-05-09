<?php
  include "dua.php";
  $name  = $_REQUEST['nama'];
  $alm  = $_REQUEST['alamat'];
  $telp  = $_REQUEST['telp'];
  $mysqli  = "INSERT INTO input_tabel (nm, addr, tlp) VALUES ('$name', '$alm', '$telp')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

  mysqli_close($conn);
?>