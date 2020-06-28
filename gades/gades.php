<?php
include '../functions.php';
$sql = "SELECT * FROM gades";
$result = mysqli_query($conn, $sql);
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
    <link rel="stylesheet" href="stylegd.css">

    <title>galeridesa</title>
</head>

<body>

    <body>
        <!-- Navigasi -->
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
        <!-- Akhir Navigasi -->


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="containergd">

                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <img src="img/1.jpg" width="500px">
                        <h5>Kegiatan Pembangunan Desa, tahun 2020</h5>
                        <p>Warga Sangat Antusias Melakukan Program Dari Dana Desa</p>
                    </div>

                    <div class="carousel-item">
                        <img src="img/2.jpg" width="500px">
                        <h5>Kegiatan Pembangunan Desa, tahun 2020</h5>
                        <p>Warga Sangat Antusias Melakukan Program Dari Dana Desa</p>
                    </div>
                    <div class=" carousel-item">
                        <img src="img/3.jpg" width="500px">
                        <h5>Kegiatan Pembangunan Desa, tahun 2020</h5>
                        <p>Warga Sangat Antusias Melakukan Program Dari Dana Desa</p>
                    </div>
                </div>

            </div>
            <a class=" carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <div class="galeri">
            <?php
            while ($row = mysqli_fetch_assoc($result)) :
            ?>
                <img src="img/<?= $row['gambar'] ?>" width="150px">
                <h5>Kegiatan <?= $row['nm_kegiatan'], $row['tahun'] ?></h5>
                <p><?= $row['ket'] ?></p>

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