<?php
include '../functions.php';
if (isset($_POST['surat'])) {
    $surat = $_POST['jnsurat'];
    $nik = $_POST['nik'];

    $sql = "SELECT * FROM dapen WHERE nik=$nik";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    if ($surat === 'kosong') {

        echo "<script>
                        alert ('jenis surat belum dipilih !');
                        document.location.href='sudes.php';  
                </script>";
    } else {
        header("location:$surat?id=$id");
    }
}
