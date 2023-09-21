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
            top: 150px;
            right: 50px;
            position: fixed;
        }

        .isi {
            top: 200px;
            left: 150px;
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
      <h2>CodeCourse</h2>
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
    <img src="gambar5.png" width="600px" height="600px">
  </div>

   <div class="isi">
    <h1 align="left" style="font-size: 55px;"><b>About Us</b></h1><br>
    <h5 style="text-align: justify;">
        Selamat datang di kursus pemrograman kami! Kami adalah tim yang berdedikasi untuk memberikan 
        pendidikan pemrograman berkualitas kepada semua orang. Dengan pengalaman yang luas dalam industri teknologi, 
        kami percaya bahwa pemrograman adalah kunci untuk membuka pintu menuju masa depan yang penuh potensi.</h5>
    <h5 style="text-align: justify;">
        Visi kami adalah memberdayakan individu untuk mencapai kesuksesan dalam dunia pemrograman. 
        Kami berkomitmen untuk memberikan pembelajaran yang interaktif, menyenangkan, dan relevan dengan 
        perkembangan terbaru dalam industri. Kursus pemrograman kami didesain secara hati-hati untuk 
        memenuhi kebutuhan beragam peserta, baik bagi pemula yang ingin memulai perjalanan mereka 
        dalam dunia pemrograman, maupun bagi mereka yang ingin mengasah keterampilan mereka lebih lanjut.
    </h5>
  </div>
</body>
</html>