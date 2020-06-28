<?php
include '../functions.php';

$id = $_GET['id'];

$sql1 = "SELECT * FROM dapen WHERE id=$id";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

if ($row1['id'] < 1) {
    echo "<script>alert ('nik belum ada dalam database !');
    document.location.href='sudes.php'; </script>";
}

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
    <link rel="stylesheet" href="stylesr.css">

    <title>suratdesa</title>
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
        <div class="uksurat">
            <img src="../img/<?= $row['logodesa'] ?>" width="110" height="110">
            <div class="kop1">
                <h2>PEMERINTAH DESA <?= strtoupper($row['nm_desa']) ?></h2>
                <h1>KECAMATAN <?= strtoupper($row['nm_kecamatan']) ?></h1>
                <h2>KABUPATEN <?= strtoupper($row['nm_kabupaten']) ?></h2>
                <div class="gariskop"> </div>
            </div>
            <div class="kop3">
                <h5>Surat Keterangan Domisili</h5>
            </div>
            <div class="nsurat">
                <p>Nomor : </p>
            </div>
            <div class="p1">
                <p>Yang bertanda tangan dibawah ini, Kepala Desa <?= $row['nm_desa'] ?>
                    Kecamatan <?= $row['nm_kecamatan'] ?> Kabupaten <?= $row['nm_kabupaten'] ?>
                    menerangkan dengan sebenarnya bahwa :</p>
            </div>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $row1['nama'] ?></td>
                </tr>

                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?= $row1['nik'] ?></td>
                </tr>

                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $row1['ttl'] ?></td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $row1['agama'] ?></td>
                </tr>

                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $row1['pekerjaan'] ?></td>
                </tr>

            </table>
            <div class="p1">
                <p>Adalah benar penduduk Desa <?= $row['nm_desa'] ?>
                    Kecamatan <?= $row['nm_kecamatan'] ?> dan saat ini
                    benar yang bersangkutan berdomisili di
                    Desa <?= $row['nm_desa'] ?> Kecamatan <?= $row['nm_kecamatan'] ?>
                    Kabupaten <?= $row['nm_kabupaten'] ?>.</p>
            </div>
            <div class="p1">
                <p>Demikian surat keterangan ini kami buat dengan sebenarnya agar dapat
                    dipergunakan seperlunya.</p>
            </div>

            <div class="p2">
                <p><?= $row['nm_desa'] . ', ' . date('d-m-Y') ?> </p>
                <p>Kepala Desa</p>
                <br>
                <br>
                <br>
                <p style="font-weight: bold;"><?= strtoupper($row['nm_kades']) ?> </p>
            </div>


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