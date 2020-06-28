<?php
include '../functions.php';
$sql = "SELECT * FROM dapen ORDER BY nama ASC";
$result = mysqli_query($conn, $sql);

?>



<!doctype html>
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

    <div class="container-table">

        <a href='tambah.php'><button class="btn btn-success">
                Tambah Data Penduduk</button></a>
        <table class="table table-striped mt-3 text-center">
            <thead class="bg-success">
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th></th>
                </tr>
            </thead>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) :
            ?>

                <tbody>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row['nik']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><a href="detail.php?id=<?= $row['id']; ?>"><button class="btn btn-primary m-auto "><i class=" far fa-eye"></i> Lihat</button></a>
                            <a href="edit.php?id=<?= $row['id']; ?>"><button class="btn btn-success m-auto"><i class="fas fa-user-edit"></i> Ubah</button></a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm ('yakin mau dihapus?')"><button class="btn btn-danger m-auto"><i class="fas fa-trash-alt"></i> Hapus</button></a></td>
                    </tr>

                </tbody>

            <?php
                $i++;
            endwhile;
            ?>

        </table>
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