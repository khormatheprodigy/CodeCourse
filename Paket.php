<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
            top: 150px;
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

        .paket1 {
            width: 600px;
            height: 700px;
            top: 120px;
            left: 50px;
            position: fixed;
        }

        .paket1 h1 {
            font-size: 45px;
            color: white;
            left: 100px;
            position: absolute;
        }

        .paket1 h2 {
            font-size: 40px;
            position: fixed;
            top: 430px;
        }

        .paket2 {
            width: 600px;
            height: 700px;
            top: 120px;
            left: 650px;
            position: fixed;
        }

        .paket2 h1{
            font-size: 45px;
            color: white;
            left: 75px;
            position: absolute; 
        }

        .paket2 h2 {
            font-size: 40px;
            position: fixed;
            top: 430px;
        }

        .paket3 { 
            width: 600px;
            height: 700px;
            top: 120px;
            right: 50px;
            position: fixed;
        }

        .paket3 h1 {
            font-size: 45px;
            color: white;
            left: 100px;
            position: absolute;
        }

        .paket3 h2 {
            font-size: 40px;
            position: fixed;
            top: 430px;
        }

        .box {
            width: 400px;
            height: 550px;
            background-color: #ffffff;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border-radius: 5%;
        }

        .box img {
            margin-top: 20px;
            width: 200px;
            height: 200px;
        }

        .box ol {
            color: black;
            margin-top: 30px;
        }

        .box button {
            top: 520px;
        position: fixed;
        }

        .box2 {
            width: 350px;
            height: 200px;
            position: relative;
        }

        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.8s;
        }

        .popup-content1 {
            background-color:  #00D0FD;
            height: 600px;
            width: 1200px;
            border-radius: 5%;
            text-align: center;
        }

        .popup-content1 button {
            font-size: 25px;
            color: black;
            --bs-btn-hover-color: black;
            --bs-btn-hover-bg: white;
            --bs-btn-hover-border-color: white;
            --bs-btn-active-color: white;
            --bs-btn-active-bg: white;
            --bs-btn-active-border-color: white;
            top: 50px;
            position: relative;
        }

        .popup-content1 img {
            position: fixed;
            top: 50px;
            right: 200px;
            z-index: 9999;
        }

        .popup-content2 {
            background-color:  #00D0FD;
            height: 600px;
            width: 1200px;
            border-radius: 5%;
            text-align: center;
        }

        .popup-content2 button {
            font-size: 25px;
            color: black;
            --bs-btn-hover-color: black;
            --bs-btn-hover-bg: white;
            --bs-btn-hover-border-color: white;
            --bs-btn-active-color: black;
            --bs-btn-active-bg: white;
            --bs-btn-active-border-color: white;
            top: 50px;
            position: relative;
        }

        .popup-content2 img {
            position: fixed;
            top: 50px;
            right: 200px;
            z-index: 9999;
        }


        .popup-content3 {
            background-color:  #00D0FD;
                    height: 600px;
                    width: 1200px;
                    border-radius: 5%;
                    text-align: center;
        }

        .popup-content3 button {
            font-size: 25px;
            color: black;
            --bs-btn-hover-color: black;
            --bs-btn-hover-bg: white;
            --bs-btn-hover-border-color: white;
            --bs-btn-active-color: black;
            --bs-btn-active-bg: white;
            --bs-btn-active-border-color: white;
            top: 50px;
            position: relative;
        }

        .popup-content3 img {
            position: fixed;
            top: 50px;
            right: 200px;
            z-index: 9999;
        }


        .boxpop {
            width: 1100px;
            height: 510px;
            background-color: white;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border-radius: 5%;
        }

        .boxpop h1 {
            color: black;
            top: 10px;
            left: 0;
            position: relative;
        }

        .boxpop h3 {
            text-align: left;
            color: black;
            font-size: 20px;
            position: relative;
            top: 30px;
        }

        .boxpop ul {
            text-align: left;
            color: black;
            font-size: 20px;
            list-style-type: none;
            position: relative;
            top: 50px;
            right: 11px;
        }

        .boxpop p {
            text-align: center;
            color: black;
            font-size: 20px;
            position: relative;
            top: 30px;
        }

        .popup.show {
            visibility: visible;
            opacity: 1;
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

    <div class="paket1">
    <h1>Web Development</h1>
    <div class="box">
        <img src="gambar2.png">
        <b>
            <ol style="font-size: 20px;">
                <li>HTML</li>
                <li>CSS</li>
                <li>Javascript</li>
                <li>Database</li>
                <li>Design Web</li>
            </ol>
        </b><br>
        <h2>Rp 4.000.000,00</h2>
        <button onclick="openPopup()" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 110px; --bs-btn-font-size: 17px; 
        --bs-btn-bg: #7976FF; --bs-btn-border-color: #7976FF;"><b>Details</b></button>
        </div>
    </div>

    <div class="paket2">
        <h1>Mobile Programming</h1>
    <div class="box">
        <img src="gambar3.png" alt="Gambar">
        <div class="box2">
             <b>
            <ol style="font-size: 20px;">
                <li>Bahasa Pemrograman (Java/Kotlin)</li>
                <li>Pengembangan Aplikasi Android</li>
                <li>Desain Antar Muka Pengguna (UI/UX)</li>
            </ol>
        </b>
        </div>
        <h2>Rp 4.500.000,00</h2>
        <button onclick="openPopup2()" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 110px; --bs-btn-font-size: 17px; --bs-btn-bg: #7976FF; --bs-btn-border-color: #7976FF;">
        <b>Details</b>
        </button>
    </div>

    <div class="paket3">
        <h1>Game Development</h1>
    <div class="box">
        <img src="gambar4.png" alt="Gambar">
        <b>
            <ol style="font-size: 22px;">
                <li>Pemrograman Game</li>
                <li>Desain Game</li>
                <li>Pengembangan Multiplayer</li>
            </ol>
        </b><br>
        <h2>Rp 5.000.000,00</h2>
        <button onclick="openPopup3()" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 110px; --bs-btn-font-size: 17px; --bs-btn-bg: #7976FF; --bs-btn-border-color: #7976FF;">
        <b>Details</b>
        </button>
    </div>
</div>
<center>
    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 110px; --bs-btn-font-size: 17px; --bs-btn-bg: #7976FF; --bs-btn-border-color: #7976FF; position: relative; top: 140px;">
            <b><a href="Registrasi.php" style="text-decoration: none; color: #ffffff;">DAFTAR SEKARANG</a></b>
    </button>
</center>

<div id="myPopup" class="popup">
  <div class="popup-content1">
    <img src="gambar10.png">
    <div class="boxpop">
        <h1>Web Development</h1>
        <h3>Pembagian Waktu Kursus selama 6 Bulan:</h3>
        <ul>
            <li>Bulan 1: HTML - Memahami dasar-dasar struktur dan elemen HTML.
            <li>Bulan 2: CSS - Menerapkan gaya dan tata letak menggunakan CSS.</li>
            <li>Bulan 3-4: JavaScript - Menguasai konsep pemrograman dan penggunaan JavaScript dalam pengembangan web.</li>
            <li>Bulan 5: Database - Memahami penggunaan database dan SQL dalam aplikasi web.</li>
            <li>Bulan 6: Design Web - Mendalami prinsip-prinsip desain web dan tata letak halaman.</li>
        </ul><br>
        <p>Kami menawarkan kursus Web Development dengan biaya sebesar Rp 4.000.000,-. Harga yang terjangkau untuk memperoleh keahlian dalam pengembangan web</p>
    <button onclick="closePopup()" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 110px; --bs-btn-font-size: 17px; --bs-btn-bg: white; --bs-btn-border-color: white;"><b>Tutup</b></button>
    </div>
  </div>
</div>

<div id="myPopup2" class="popup">
  <div class="popup-content2">
    <img src="gambar10.png">
    <div class="boxpop">
        <h1>Mobile Programming (Android)</h1>
        <h3>Pembagian Waktu Kursus selama 6 Bulan:</h3>
        <ul>
            <li>Bulan 1: HTML - Memahami dasar-dasar struktur dan elemen HTML.
            <li>Bulan 2: CSS - Menerapkan gaya dan tata letak menggunakan CSS.</li>
            <li>Bulan 3-4: JavaScript - Menguasai konsep pemrograman dan penggunaan JavaScript dalam pengembangan web.</li>
            <li>Bulan 5: Database - Memahami penggunaan database dan SQL dalam aplikasi web.</li>
            <li>Bulan 6: Design Web - Mendalami prinsip-prinsip desain web dan tata letak halaman.</li>
        </ul><br>
        <p>Kami menawarkan kursus Web Development dengan biaya sebesar Rp 4.500.000,-. Harga yang terjangkau untuk memperoleh keahlian dalam pengembangan web</p>
    <button onclick="closePopup2()" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 110px; --bs-btn-font-size: 17px; --bs-btn-bg: white; --bs-btn-border-color: white;"><b>Tutup</b></button>
    </div>
  </div>
</div>

<div id="myPopup3" class="popup">
  <div class="popup-content3">
    <img src="gambar10.png">
    <div class="boxpop">
        <h1>Game Development</h1>
        <h3>Pembagian Waktu Kursus selama 6 Bulan:</h3>
        <ul>
            <li>Bulan 1: HTML - Memahami dasar-dasar struktur dan elemen HTML.
            <li>Bulan 2: CSS - Menerapkan gaya dan tata letak menggunakan CSS.</li>
            <li>Bulan 3-4: JavaScript - Menguasai konsep pemrograman dan penggunaan JavaScript dalam pengembangan web.</li>
            <li>Bulan 5: Database - Memahami penggunaan database dan SQL dalam aplikasi web.</li>
            <li>Bulan 6: Design Web - Mendalami prinsip-prinsip desain web dan tata letak halaman.</li>
        </ul><br>
        <p>Kami menawarkan kursus Web Development dengan biaya sebesar Rp 5.000.000,-. Harga yang terjangkau untuk memperoleh keahlian dalam pengembangan web</p>
    <button onclick="closePopup3()" class="btn btn-primary" style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 110px; --bs-btn-font-size: 17px; --bs-btn-bg: white; --bs-btn-border-color: white;"><b>Tutup</b></button>
    </div>
  </div>
</div>

<script>
  function openPopup() {
    var popup = document.getElementById("myPopup");
    popup.classList.add("show");
  }

  function closePopup() {
    var popup = document.getElementById("myPopup");
    popup.classList.remove("show");
  }

  function openPopup2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.add("show");
  }

  function closePopup2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.remove("show");
  }

  function openPopup3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.add("show");
  }

  function closePopup3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.remove("show");
  }
</script>

</body>
</html>