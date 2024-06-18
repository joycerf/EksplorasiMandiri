<?php

    include "Koneksi.php";

        // Menampilkan data inputan
        // $npm = $_POST['npm'];
        $namamhs = $_POST['namamhs'];
        $prodi = $_POST['prodi'];
        // $perulangan = $_POST['ulangi'];

        $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (namamhs, prodi) VALUES ('".$namamhs."','".$prodi."')") or die(mysqli_error($koneksi));

        if($proses){
            echo "<script>
                    alert('DATA BERHASIL DISIMPAN');
                    window.location.href='Pertemuan6.php';
                    </script>";
        } else{
            echo "<script>alert('DATA GAGAL DISIMPAN');
                    window.location.href='Pertemuan6.php';
                    </script>";
        }

        // if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //     $secretKey = '6LfoY-8pAAAAAGsEr0SZJYe2fI0Grt2F5aQS7jY_';
        //     $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);
        //     $response = json_decode($verifyResponse);

        //     if($response->success){

        //         $mail = new PHPMailer(true);

        //         try{
        //         } catch(Exception $e){
        //             echo "GABISA {$mail->ErrorInfo}";
        //         }
        //     } else{
        //         $_SESSION['status'] = "RECAPTCHA GONE WRONG";
        //         header("Location: {$_SERVER["HTTP_REFERER"]}");
        //         exit(0);
        //     }
        // } else{
        //     $_SESSION['status'] = "ERROR RECAPTCHA";
        //     header("Location: {$_SERVER["HTTP_REFERER"]}");
        //     exit(0);
        // }

    // if($nilai_mhs != ""){

    //     if($nilai_mhs >= 85){
    //         $huruf_mutu = 'A';
    //     }else if($nilai_mhs >= 75){
    //         $huruf_mutu = 'B';
    //     }else if($nilai_mhs >= 65){
    //         $huruf_mutu = 'C';
    //     }else{
    //         $huruf_mutu = 'E';
    //     }

    //     #Penggabungan php dengan java
    //     for($x=0; $x <= $perulangan; $x++){
    //         echo $npm. " Nilai Mata Kuliah anda adalah: " .$huruf_mutu."<br>";
    //         #Penggabungan php dengan java
    //         #echo "<script>alert('".$npm. "Nilai Mata Kuliah anda adalah:" .$huruf_mutu."')</script>";
    //     }

    // }
?>

<!--Terjadi Eror pada Bagian $Var1,Hal ini terjadi karena ketika halaman pertama kali dimuat, 
tidak ada data yang dikirimkan ke server melalui metode POST*-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./pertemuan6.php">Kembali</a>
</body>
</html> -->