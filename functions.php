<?php
$conn = mysqli_connect("localhost", "root", "root", "sides");

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah yang diupload adalah gambar

    if ($error === 4) {
        echo "<script>
                    alert('masukkan gambar terlebih dahulu');
                                        
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                    alert('hanya mendukung file dengan format jpg, jpeg, dan png');
                                        
        </script>";
        return false;
    }

    if ($ukuranFile >= 2097152) {
        echo "<script>
                    alert('Ukuran gambar maksimal 2 mb');
        </script>";
        return false;
    } else {

        $dirUpload = "img/";
        $terupload = move_uploaded_file($tmpName, $dirUpload . $namaFile);

        return $namaFile;
    }
}
