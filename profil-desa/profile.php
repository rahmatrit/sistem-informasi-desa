<?php

include '../functions.php';
$sql = "SELECT * FROM pfdesa";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

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
    <link rel="stylesheet" href="stylepr.css">

    <title>profiledesa</title>
</head>

<body>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php"><i class="fas fa-home mr-2 ml-5"></i>Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="profile.php"><i class="fas fa-door-open mr-2 ml-4"></i>Profile Desa <span class="sr-only">(current)</span></a>
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

        <div class="containerprofile">

            <h1>Profile Desa <?= $row['nm_desa'] ?></h1>

            <p>Desa <?= $row['nm_desa'] ?> Kecamatan <?= $row['nm_kecamatan'] ?> Kabupaten
                <?= $row['nm_kabupaten'] ?> sekarang dipimpin oleh <?= $row['nm_kades'] ?>
                dan dibantu oleh <?= $row['nm_sekdes'] ?> sebagai Sekretaris Desa. Selain
                dibantu oleh Sekretaris Desa, <?= $row['nm_kades'] ?> juga dibantu oleh Perangkat
                Desa lainnya seperti kaur, kasi dan kadus.</p>

            <img src="../img/<?= $row['logodesa'] ?>" width="250" height="250">

            <p><?= $row['informasi'] ?></p>

            <p>Berikut struktur Pemerintahan Desa <?= $row['nm_desa'] ?> tahun 2019-2020<br>
                Kepala Desa : <?= $row['nm_kades'] ?><br>
                Sekretaris Desa : <?= $row['nm_sekdes'] ?><br>
                Kaur Keuangan : <?= $row['nm_bendahara'] ?><br>
                Kaur Umum : <?= $row['nm_kaum'] ?><br>
                Kasi Pemerintahan : <?= $row['nm_kasipem'] ?><br>
                Kasi Pembangunan : <?= $row['nm_kasipemb'] ?><br>
                Kasi Keistimewaan : <?= $row['nm_kasikes'] ?><br>
                Kadus : <?= $row['nm_kadus'] ?><br>
                BPD : <?= $row['nm_bpd'] ?><br>
                Imam Meunasah : <?= $row['nm_imam'] ?><br>
                Kepala Pemuda : <?= $row['nm_pmd'] ?><br>
                Ketua PKK : <?= $row['nm_pkk'] ?><br>
            </p>

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