<?php

include '../functions.php';

if (isset($_POST['tambah'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];

    // upload foto
    $gambar = upload();

    if (!$gambar) {
        echo " <script>
                        alert('data gagal ditambahkan, coba lagi !!!');
                        document.location.href='tambah.php';
                </script>";
        return false;
    }

    $sql = "INSERT INTO dapen (nik, nama, ttl, alamat, agama, status, pekerjaan, gambar) VALUE 
    ('$nik', '$nama', '$ttl', '$alamat', '$agama', '$status', '$pekerjaan', '$gambar' )";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        alert('data berhasil ditambah');
        document.location.href='dapen.php'
        </script>";
    } else {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "gagal !";
        echo "<hr>";
        echo mysqli_error($conn);
    }
}





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

    <div class="containertambah">

        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group row pt-4 mx-5">
                <label for="nik" class="col-sm-3 col-form-label">Nik</label>
                <div class="col-sm-9">
                    <input type="text" name="nik" class="form-control" id="nik" placeholder="masukkan nik" maxlength="16" required>
                </div>
            </div>

            <div class="form-group row mx-5">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="masukkan nama" required>
                </div>
            </div>

            <div class="form-group row mx-5">
                <label for="ttl" class="col-sm-3 col-form-label">Tempat/Tgl Lahir</label>
                <div class="col-sm-9">
                    <input type="text" name="ttl" class="form-control" id="ttl" placeholder="masukkan tempat dan tanggal lahir">
                </div>
            </div>

            <div class="form-group row mx-5">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="masukkan alamat">
                </div>
            </div>

            <div class="form-group row mx-5">
                <label class="col-sm-3 col-form-label">Agama</label>
                <select name="agama" class="custom-select col-sm-5 ml-3">
                    <option selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                </select>
            </div>

            <fieldset class="form-group ml-5">
                <div class="row">
                    <legend class="col-form-label col-sm-2 mt-0">Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="Kawin" checked>
                            <label class="form-check-label" for="status1">
                                Kawin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="Belum Kawin">
                            <label class="form-check-label" for="status2">
                                Belum Kawin
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row mx-5">
                <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="masukkan pekerjaan">
                </div>
            </div>

            <div class="form-group ml-5 pb-0 mb-0">
                <label>Pilih Gambar</label>
                <input type="file" name="gambar" class="form-control-file">
            </div>


            <div class="form-group row ml-5 pb-5">
                <div class="col-sm-10">
                    <button type="submit" name="tambah" id="tambah" class="btn btn-success m-auto ">Tambah Data</button>
                    <a href="dapen.php" class="btn btn-danger m-auto ">Kembali</a>
                </div>
            </div>
        </form>

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