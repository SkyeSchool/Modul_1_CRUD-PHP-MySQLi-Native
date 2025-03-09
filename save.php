<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];
    $query = "INSERT INTO students VALUES (null,'$nis', '$nama', '$email', '$keterangan')";
    $save = mysqli_query($conn, $query);
    if ($save) {
        header("location:index.php");
    } else {
        echo "Gagal disimpan";
    }  
} else {
    header("location:index.php");
}

?>