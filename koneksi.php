<?php
     define ('DB_HOST', 'localhost');
     define ('DB_USER', 'root');
     define ('DB_PASS', '');
     define ('DB_NAME', 'db_pplg');

     $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
     if (!$conn) {
          die("Koneksi ke database gagal: " . mysqli_connect_error());
     }
?>