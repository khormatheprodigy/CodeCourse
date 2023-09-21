<?php
include "koneksi.php";
if(isset($_COOKIE['admin'])){
    $Email = $_COOKIE['admin'];
}
$sql = "Select * FROM admin";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CodeCourse</title>
    <style>
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: black;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .sidebar ul {
            position: absolute;
            top: 20px;
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            color: white;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            font-size: 40px;
        }
        .sidebar li {
          list-style-type: none;
          position: relative;
          top: 200px;
          font-size: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: white;
        }
        .content {
          position: relative;
          top: 0px;
          margin-left: 200px;
          padding: 20px;
        }

        .footer {
            background-color: black;
            padding: 20px;
            height: 50px;
            text-align: right;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul class="sidebar-top">
            <a href="#">Code</a>
            <a href="#">Course</a>
        </ul>
        <li><a href="Homeadmin.php">CALON MURID</a></li><br>
        <li><a href="Admin.php">DATA ADMIN</a></li><br><br><br><br><br><br>
        <li><a href="Home.php">LOGOUT</a>
    </div>
    </div>
   <div class="footer"></div>
    <div class="content">
        <h1>Data Admin | Selamat Datang Admin!</h1><br>
        <table  class="table" style="postition: 200px">
        <thead class="table-dark">
            <th>Nama</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal lahir</th>
            <th>Aksi</th>
        </thead>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Telp']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['Tempatlahir']; ?></td>
                <td><?php echo $row['Tanggal_Lahir']; ?></td>
                <td>
                <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: 5px; --bs-btn-padding-x: 30px; --bs-btn-font-size: 15px; --bs-btn-bg: red; --bs-btn-border-color: red;;">
                        <a style="text-decoration: none; color: #ffffff" href="Hapusadmin.php?Nama=<?php echo $row['Nama'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> <b>Hapus</b>  </a> 
                </button> 
                <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: 5px; --bs-btn-padding-x: 30px; --bs-btn-font-size: 15px; --bs-btn-bg: blue; --bs-btn-border-color: blue;">
                        <a style="text-decoration: none; color: #ffffff" href="Updateadmin.php?Nama=<?php echo $row['Nama'];?>" onclick="return confirm('Apakah Anda yakin ingin mengupdate data ini?')"> <b>Update</b>  </a>
                </button>
                </td>
            </tr>
        <?php 
        }   
        $conn->close();    
        exit();
        ?>
    </table>
    </div>
    <div class="footer"></div>

    
</body>
</html>