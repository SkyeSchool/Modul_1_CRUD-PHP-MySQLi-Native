<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students PPLG Skye</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="tambah.php">Tambah Data Students</a>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1>Manajemen Students</h1>
        <p>Skye Digipreneur School</p>
    </div>

    <div class="container mt-4">
        <h3 class="mb-3">Daftar Students</h3>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM students";
                    $data = mysqli_query($conn, $sql);

                    if ($data) {
                        while ($tampilkan = mysqli_fetch_array($data)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $tampilkan['nis'] . "</td>";
                            echo "<td>" . $tampilkan['nama'] . "</td>";
                            echo "<td>" . $tampilkan['email'] . "</td>";
                            echo "<td>" . $tampilkan['keterangan'] . "</td>";
                            echo "<td align='center'>";
                    ?>
                            <a href="edit.php?id=<?php echo $tampilkan['id']; ?>"><button class="btn btn-warning btn-sm">EDIT</button></a>
                            <a href="hapus.php?id=<?php echo $tampilkan['id']; ?>"><button class="btn btn-danger btn-sm">DELETE</button></a>

                    <?php
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>