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

         .form-row {
            display: flex;
            gap: 20px;
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

        .popup-content {
            background-color:  #00D0FD;
            height: 400px;
            width: 500px;
            border-radius: 5%;
            text-align: center;
        }

        .boxpop {
            height: 350px;
            width: 450px;
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
            font-size: 40px;
            color: black;
            top: 10px;
            left: 0;
            position: relative;
        }

        .boxpop h2 {
            font-size: 30px;
            color: black;
            top: 40px;
            left: 0;
            position: relative;
        }

        .boxpop h3 {
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

    <div class="isi">
        <div>
            <h1 style="font-size: 50px;"><b>Form Pendaftaran</b></h1>
            <h1 style="font-size: 50px;"><b>CodeCourse</b></h1><br>
            <form action="Pendaftaran.php" method="POST">
                 <div class="mb-3">
                    <input style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <input style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="text" class="form-control" name="Tempatlahir" id="Tempatlahir" placeholder="Tempat Lahir" required>
                </div>
                <div class="mb-3">
                    <input type="date" style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="text" class="form-control" name="Tanggallahir" id="Tanggallahir" placeholder="Tanggal Lahir" required>
                </div>
                <select class="form-select" style="width: 200px; padding: 15px; border-color: #7976FF; background-color: #8098f92d;" name="Paket" id="Paket" required>
                    <label>Pilih Jenis</label>
                    <option value="Web Development" name="Jenis" id="Web">Web Development</option>
                    <option value="Mobile Programming" name="Jenis" id="Mobile">Mobile Programming</option>
                    <option value="Game Development" name="Jenis" id="Game">Game Development</option>
                </select><br>
                <div class="mb-3">
                    <input style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="email" class="form-control" name="Email" id="Email" placeholder="Email" required>
                </div>
                 <div class="mb-3">
                    <input style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="tel" class="form-control" name="Telp" id="Telp" placeholder="Nomor Telepon" required>
                </div>
                <div class="mb-3" >
                    <textarea style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" class="form-control" name="Alamat" id="Alamat" rows="3" placeholder="Alamat" required></textarea>
                </div>
                <center>
                    <button class="btn btn-primary" style="text-decoration: none; --bs-btn-padding-y: 12px; --bs-btn-padding-x: 250px; --bs-btn-font-size: 15px;">
                    <b>DAFTAR</b>
                    </button>
                </center>
            </form>
        </div>
    </div>
  </div>
</body>
</html>
