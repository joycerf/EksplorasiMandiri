<?php
    include "Koneksi.php";

    $npm = $_GET['id'];

    $proses = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $npm") or die(mysqli_error($koneksi));

    if($proses){
        echo "<script>
                alert('DATA BERHASIL DIHAPUS');
                window.location.href='Pertemuan6.php';
                </script>";
    } else{
        echo "<script>alert('DATA GAGAL DIHAPUS');
                window.location.href='Pertemuan6.php';
                </script>";
    }
?>