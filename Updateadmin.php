<?php 
    include "koneksi.php";
    $Nama = $_GET['Nama'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE Nama='$Nama';");
    $row = mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        $Nama = $_POST['Nama'];
        $Email = $_POST['Email'];
        $Telp = $_POST['Telp'];
        $Alamat = $_POST['Alamat'];
        $Tempatlahir = $_POST['Tempatlahir'];
        $Tanggallahir = $_POST['Tanggallahir'];
        $sql=mysqli_query($conn, "UPDATE admin SET 
        Nama='$Nama', Email='$Email', Telp='$Telp', Alamat='$Alamat', 
        Tempatlahir='$Tempatlahir', Tanggal_Lahir='$Tanggallahir' WHERE Nama='$Nama';");
        header('Location: Admin.php');
    }
?> 
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: black;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            color: white;
        }

        .header li {
            margin-right: 40px;
        }

        .header a {
            text-decoration: none;
            color: white;
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

        .gambar {
            max-width: 100%;
            top: 150px;
            right: 20px;
            position: fixed;
        }

        .isi {
           justify-content: space-between;
            width: 750px; 
            height: 950px; 
            background-color: #ffffff; 
            margin: 0 auto; 
            display: flex; 
            justify-content: center;
            align-items: center; 
        }

        .isi h1 {
            text-align: center;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <a href="Homeadmin.php"><h2>CodeCourse</h2></a>
        </ul>
    </div>

    <div class="footer">
    </div>
    <div class="isi">
        <div>
            <h1 style="font-size: 50px;"><b>Update Data Admin</b></h1><br>
            <form action="" method="POST" style="align-items: center; align-self: center; align-content: center;">
                 <div class="mb-3">
                    <input  class="form-control" style="padding: 10px; border-color: #7976FF; background-color: #8098f92d;"  type="text" name="Nama" value="<?php echo $row['Nama']; ?>">
                </div>

                <div class="mb-3">
                   <input class="form-control" style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="email" name="Email" value="<?php echo $row['Email']; ?>">
                </div>

                <div class="mb-3">
                    <input class="form-control" style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="tel" name="Telp" value="<?php echo $row['Telp']; ?>">
                </div>

                <div class="mb-3">
                    <input class="form-control" style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="text" name="Alamat" value="<?php echo $row['Alamat']; ?>">
                </div>

                <div class="mb-3">
                    <input class="form-control" style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="text" name="Tempatlahir" value="<?php echo $row['Tempatlahir']; ?>">
                </div>

                <div class="mb-3">
                    <input class="form-control" style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="date" name="Tanggallahir" value="<?php echo $row['Tanggal_Lahir']; ?>">
                </div>
                <center>
                    <button  value="Ubah" name="submit" type="submit" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 240px; --bs-btn-font-size: 15px; --bs-btn-bg: blue; --bs-btn-border-color: blue;"> 
                        <b>Ubah</b> 
                    </button>
                </center>
            </form>
        </div>
    </div>
</body>
</form>