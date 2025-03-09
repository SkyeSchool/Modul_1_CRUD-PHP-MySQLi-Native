<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Students</title>
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
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link active" href="tambah.php">Tambah Data Students<span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1>Manajemen Students</h1>
        <p>Skye Digipreneur School</p>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 order-md-2 order-1 d-flex justify-content-center">
                <img src="images/yellow.png">
            </div>
            <div class="col-md-6 order-md-1 order-2">
            <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $sql ="SELECT * FROM students WHERE id='$id'";
                $query = mysqli_query($conn,$sql);
                while($data = mysqli_fetch_array($query)){
            ?>   
                <form action="update.php" method="POST">
                    <div class="col-mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">NIS</span>
                            </div>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>" required>
                            <input type="text" class="form-control" name="nis" value="<?php echo $data['nis']; ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nama Lengkap</span>
                            </div>
                            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required>
                        </div>
                
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Email</span>
                            </div>
                            <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Catatan</span>
                            </div>
                            <textarea class="form-control" rows="3" name="keterangan" required><?php echo $data['keterangan']; ?></textarea>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>