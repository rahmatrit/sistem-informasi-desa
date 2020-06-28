<?php
include '../functions.php';

$id = $_GET['id'];

$sql = "SELECT * FROM dapen WHERE id=$id";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) :

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../css/all.css">

        <!-- Css -->
        <link rel="stylesheet" href="../style.css">

        <title>SiDes!</title>
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php"><i class="fas fa-home mr-2 ml-5"></i>Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="../profil-desa/profile.php"><i class="fas fa-door-open mr-2 ml-4"></i>Profile Desa <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="../dapen/dapen.php"><i class="fas fa-id-card mr-2 ml-4"></i>Data Penduduk <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-question-circle mr-2 ml-4"></i>Bantuan <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0" action="../cari.php" method="post">
                    <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Masukkan nik / nama" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
                </form>
            </div>
        </nav>

        <!-- Akhir Navbar -->

        <div class="containerdetail">


            <h5 class="card-title text-center pt-4">Detail Data Penduduk</h5>
            <img class="img-detail" src="../img/<?= $row['gambar']; ?>">

            <div class="container-table-detail">
                <table class="table table-striped mt-3">


                    <thead>

                        <tr>
                            <th>Nik</th>
                            <th><?= $row['nik']; ?></th>

                        <tr>
                            <th>Nama</th>
                            <th><?= $row['nama']; ?></th>
                        </tr>

                        <tr>
                            <th>Tempat/Tanggal Lahir</th>
                            <th><?= $row['ttl']; ?></th>
                        </tr>

                        <tr>
                            <th>Alamat</th>
                            <th><?= $row['alamat']; ?></th>
                        </tr>

                        <tr>
                            <th>Agama</th>
                            <th><?= $row['agama']; ?></th>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <th><?= $row['status']; ?></th>
                        </tr>

                        <tr>
                            <th>Pekerjaan</th>
                            <th><?= $row['pekerjaan']; ?></th>
                        </tr>

                    </thead>


                </table>
            </div>

            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-success mb-5 mt-0 ml-5">Ubah</a>
            <a href="../sudes/sudes.php?nik=<?= $row['nik']; ?>" class="btn btn-info mb-5 mt-0 ">Buat Surat</a>
            <a href="dapen.php" class="btn btn-danger mb-5 mt-0 ">Kembali</a>
        </div>
        </div>
    <?php endwhile; ?>

    </div>
    <!-- footer -->
    <div class="card-footer text-muted mt-3 text-right bg-dark">
        Sistem Informasi Desa V1.0
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.js"></script>

    </body>

    </html>