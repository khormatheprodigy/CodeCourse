<?php 
    include "koneksi.php";
    
    $Nama = $_GET['Nama'];
    $sql = "DELETE FROM calonmurid WHERE Nama = '$Nama'";
    $result = $conn->query($sql);
    header('Location: Homeadmin.php');
    exit();
?>