<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];
    mysqli_query($conn, "update students set nis='$nis', nama='$nama', email='$email', keterangan='$keterangan' where id='$id'");
    header("location:index.php");
?>