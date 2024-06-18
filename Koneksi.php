<?php

    $hostname = "localhost";
    $userDatabase = "root";
    $passwordUser = "";
    $databaseName = "eksplorasi";

    $koneksi = mysqli_connect($hostname, $userDatabase, $passwordUser, $databaseName) or die(mysqli_error());

    // if($koneksi){
    //     echo "berhasil";
    // } else{
    //     echo "gagal";
    // }
?>