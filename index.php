<?php
include 'header.php';


?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Css -->
    <link rel="stylesheet" href="style.css">

    <title>SiDes!</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><i class="fas fa-home mr-2 ml-5"></i>Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="profil-desa/profile.php"><i class="fas fa-door-open mr-2 ml-4"></i>Profile Desa <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="dapen/dapen.php"><i class="fas fa-id-card mr-2 ml-4"></i>Data Penduduk <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-question-circle mr-2 ml-4"></i>Bantuan <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0" action="cari.php" method="post">
                <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Masukkan nik / nama" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
            </form>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <div class="kontainer">
        <div class="col-md-12">
            <div class="row text-white">
                <a href="profil-desa/profile.php">
                    <div class="card bg-info ml-4 mt-5" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">PROFILE DESA</h5>
                            <div class="card-body-icon text-center"><i class="fas fa-door-open"></i></div>
                            <p class="card-text text-white">Lihat Profile Desa Disini</p>
                        </div>
                    </div>
                </a>

                <a href="dapen/dapen.php">
                    <div class="card bg-success ml-4 mt-5" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">DATA PENDUDUK</h5>
                            <div class="card-body-icon text-center"><i class="fas fa-id-card"></i></div>
                            <p class="card-text text-white">Lihat Data Penduduk Disini</p>
                        </div>
                    </div>
                </a>

                <a href="sudes/sudes.php">
                    <div class="card bg-primary ml-4 mt-5" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">BUAT SURAT</h5>
                            <div class="card-body-icon text-center"><i class="fas fa-mail-bulk"></i></div>
                            <p class="card-text text-white">Buat Surat Disini</p>
                        </div>
                    </div>
                </a>

                <a href="gades/gades.php">
                    <div class="card bg-danger ml-4 mt-5" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">GALERI DESA</h5>
                            <div class="card-body-icon text-center"><i class="fas fa-photo-video"></i></div>
                            <p class="card-text text-white">Lihat Galeri Desa Disini</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="col-md-12">
            <div class="row text-white">
                <a href="https://twitter.com/mediadesa_org" target="_blank">
                    <div class="card bg-info ml-4 mt-3" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">TWITTER DESA</h5>
                            <div class="card-body-icon text-center"><i class="fab fa-twitter"></i></div>
                            <p class="card-text text-white">Ayo !!! Lihat Twitt Kami</p>
                        </div>
                    </div>
                </a>

                <a href="https://web.facebook.com/mediadesa.org" target="_blank">
                    <div class="card bg-success ml-4 mt-3" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">FACEBOOK DESA</h5>
                            <div class="card-body-icon text-center"><i class="fab fa-facebook"></i></div>
                            <p class="card-text text-white">Ayo !!! Pantau FB Media Desa</p>
                        </div>
                    </div>
                </a>

                <a href="https://www.youtube.com/c/mediadesa_org" target="_blank">
                    <div class="card bg-primary ml-4 mt-3" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">YOUTUBE</h5>
                            <div class="card-body-icon text-center"><i class="fab fa-youtube"></i></div>
                            <p class="card-text text-white">Lihat Vidio Terbaru Kami</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="card bg-danger ml-4 mt-3" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">USER KONFIGURASI</h5>
                            <div class="card-body-icon text-center"><i class="fas fa-user-cog"></i></i></div>
                            <p class="card-text text-white">Ayo!!! Atur profil desamu disini</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </div>

    <!-- footer -->
    <div class="card-footer text-muted mt-3 text-right bg-dark">
        Sistem Informasi Desa V1.0
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>

</body>

</html>