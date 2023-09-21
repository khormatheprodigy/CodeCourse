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
            right: 90px;
            position: fixed;
        }

        .icon {
            max-width: 100%;
            top: 480px;
            left: 150px;
            position: fixed;
        }


        .icon-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .icon-item img {
            margin-right: 15px;
        }

        .icon-item h5 {
            margin: 0;
            padding: 0;
        }

        .isi {
            top: 200px;
            left: 150px;
            color: #ffffff;
            width: 730px;
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
    <img src="gambar6.png" width="650px" height="650px">
  </div>

   <div class="isi">
      <h1 align="left" style="font-size: 55px;"><b>Contact Us</b></h1><br>
      <h5 style="text-align: justify;">
          Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin mempelajari lebih lanjut tentang 
          kursus-kursus yang kami tawarkan. 
          Kami siap membantu Anda mencapai tujuan belajar Anda dalam pemrograman.  
      </h5>
      <h5>
        Terima kasih atas minat dan kepercayaan Anda pada kursus pemrograman kami. 
        Kami berharap dapat membantu Anda dalam perjalanan belajar pemrograman Anda.
      </h5>
      <div class="icon">
      <div class="icon-item">
          <img src="gambar7.png">
          <h5 style="margin-left: 10px;">0887232492</h5>
      </div>
      <div class="icon-item">
          <img src="gambar8.png">
          <h5 style="margin-left: 10px;">code.course</h5>
      </div>
      <div class="icon-item">
          <img a src="gambar9.png">
          <h5 style="margin-left: 12px;">codecourse@gmail.com</h5>
        </div>
      </div> 
    </div>
</body>
</html>