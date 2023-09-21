<?php
    require 'koneksi.php';
    $Nama = $_POST["Nama"];
    $Tempatlahir = $_POST["Tempatlahir"];
    $Tanggallahir = $_POST["Tanggallahir"];
    $Paket = $_POST["Paket"];
    $Email = $_POST["Email"];
    $Telp = $_POST["Telp"];
    $Alamat = $_POST["Alamat"];

    $query_sql = "INSERT INTO calonmurid (Nama, Tempatlahir, Tanggallahir, Paket, Email, Telp, Alamat) 
    VALUES ('$Nama', '$Tempatlahir', '$Tanggallahir', '$Paket', '$Email', '$Telp', '$Alamat')";
    
    if(mysqli_query($conn, $query_sql)){
        echo '<script> alert("Selamat Pendaftaran Anda Berhasil! Silahkan pergi ke gedung CodeCourse terdekat dan screenshoot tampilan ini sebagai bukti pendaftaran.");
        </script>';
        echo '<script>window.location.href = "Home.php";</script>';
        
    }else{
        echo "Pendaftaran Gagal : " . mysqli_error($conn);
    }
?>