<?php
include '../functions.php';
$nik = $_GET['nik'];
$sql = "SELECT * FROM dapen WHERE nik=$nik";
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

    <title>suratdesa</title>
</head>

<body>

    <body>
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

        <div class="containertambah">

            <form action="proses.php" method="post">

                <div class="form-group row mx-5 pt-5">

                    <label class="col-sm-3 col-form-label">Jenis Surat</label>
                    <select name="jnsurat" class="custom-select col-sm-5 ml-3">
                        <option selected value="kosong">Pilih Jenis Surat</option>
                        <option value="skd.php">Surat Keterangan Domisili</option>
                        <option value="skp.php">Surat Keterangan Penduduk</option>
                        <option value="skm.php">Surat Keterangan Miskin </option>
                    </select>
                </div>

                <div class="form-group row mx-5">
                    <label for="nik" class="col-sm-3 col-form-label">Untuk</label>
                    <div class="col-sm-9">
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="masukkan nik sesuai data di KTP" maxlength="16" value="<?= $row['nik'] ?>" required>
                    </div>
                </div>

                <div class="form-group row ml-5 pb-2">
                    <div class="col-sm-10">
                        <button type="submit" name="surat" id="surat" class="btn btn-info m-auto ">Buat</button>
                    </div>
                </div>

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