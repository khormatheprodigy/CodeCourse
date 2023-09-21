<?php
    include "koneksi.php";
    setcookie('admin', '', time() - 3600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CodeCourse</title>
    <style>
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #7976FF;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
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
            background-color: #7976FF;
            padding: 20px;
            height: 50px;
            text-align: right;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            padding-top: 15px; 
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .footer p {
            color: white;
            margin: 0;
            padding: 0;
        }


        .gambar {
            max-width: 100%;
            top: 100px;
            right: 20px;
            position: fixed;
        }

        .isi {
            top: 250px;
            left: 90px;
            color: #ffffff;
            width: 800px;
            height: 720px;
            position: fixed;
        }
  </style>
</head>

<body style="background-color: #00D0FD;">
    <div class="header">
    <ul>
      <a href="Home.php"><h2>CodeCourse</h2></a>
    </ul>
    <ul>
      <li><a href="Home.php"><h5>HOME</h5></a></li>
      <li><a href="AboutUs.php"><h5>ABOUT US</h5></a></li>
      <li><a href="ContactUs.php"><h5>CONTACT US</h5></a></li>
    </ul>

  </div>
   <div class="footer">
    <p>© Copyright CodeCourse LTD all rights reserved TM 2023</p>
  </div>

  <div class="gambar">
    <img src="gambar1.png">
  </div>

   <div class="isi">
    <h1 align="center" style="font-size: 55px;"><b>Kursus Bahasa Pemrograman</b></h1><br>
    <h5 style="text-align: justify;">
        CodeCourse merupakan kursus online bahasa pemrograman yang memberikan kesempatan untuk 
        mempelajari dan menguasai salah satu aspek penting dalam dunia teknologi informasi.</h5>
    <h5 style="text-align: justify;">
        Anda akan diajarkan tentang konsep dasar bahasa pemrograman, sintaks, algoritma, 
        dan struktur data yang digunakan untuk mengembangkan aplikasi dan solusi perangkat lunak.</h5>
    <h5 style="text-align: justify;">
        Apakah anda ingin memulai perjalanan dalam mempelajari bahasa pemrograman atau mengasah keterampilan pemrograman 
        yang sudah anda miliki? CodeCourse adalah pilihan yang sempurna untuk meningkatkan pengetahuan dan kemampuan 
        dalam dunia teknologi informasi.
    </h5><br><br>
    <center>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 80px; --bs-btn-font-size: 15px; 
        --bs-btn-bg: #7976FF; --bs-btn-border-color: #7976FF;">
        <b><a href="Paket.php" style="text-decoration: none; color: #ffffff;">LIHAT PAKET COURSE</a></b>
        </button>
    </center>
  </div>
</body>
</html>