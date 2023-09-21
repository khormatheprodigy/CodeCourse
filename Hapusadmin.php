<?php 
    include "koneksi.php";

    $Nama = $_GET['Nama'];

    $sql = "DELETE FROM admin WHERE Nama = '$Nama'";
    $result = $conn->query($sql);
    header('Location: Admin.php');
    exit();
?>