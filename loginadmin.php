<?php
    include 'koneksi.php';
    $Email = "";
    $Password = "";
    $PasswordErr = "";
    $EmailErr = "";

    if(isset($_POST['submit'])){
        $Email = trim($_POST['Email']);
        $Password = trim($_POST['Password']);

          if(empty($Email)){
            $EmailErr = "Email masih kosong.<br>";
          } 
          if(empty($Password)){
            $PasswordErr = "Password masih kosong.<br>";
          }
          if(!empty($Email) and !empty($Password)){
            $sql = "select * from admin where Email = '$Email' AND Password = '$Password'";
            $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            setcookie('admin', $Email, time() + (86400), '/'); 
            header('Location: Homeadmin.php');
             exit();
          } else {
            $message = "email atau password anda salah";
            echo "<script>alert('$message');</script>";
          }
          $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymo ">
    <title>CodeCourse</title>
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
            width: 750px; 
            height: 950px; 
            background-color: #ffffff; 
            margin: 0 auto; 
            display: flex; 
            justify-content: center;
            align-items: center; 
        }

  </style>
</head>

<body style="background-color: white;">
    <div class="header">
        <ul>
        <a href="Home.php"><h2>CodeCourse</h2></a>
        </ul>
    </div>

    <div class="footer">
        <p>© Copyright CodeCourse LTD all rights reserved TM 2023</p>
    </div>

    <div class="isi">
        <div>
            <h1 style="font-size: 55px;"><b>Login ke Akun Anda</b></h1><br>
            <form action="loginadmin.php" method="POST">
                <div class="mb-3">
                    <input style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="email" class="form-control" name="Email" value="<?php echo $Email ?>"id="Email" placeholder="Email">
                    <label style="color:red;"><?php echo $EmailErr; ?></label>
                </div>
                <div class="mb-3" >
                    <input style="padding: 15px; border-color: #7976FF; background-color: #8098f92d;" type="password" class="form-control" aria-describedby="ket" name="Password" value="<?php echo $Password ?>" id="Password" placeholder="Password">
                    <label style="color:red;"><?php echo $PasswordErr; ?></label>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary"
                    style="--bs-btn-padding-y: 12px; --bs-btn-padding-x: 240px; --bs-btn-font-size: 15px; 
                    --bs-btn-bg: blue; --bs-btn-border-color: blue;" name="submit">
                    <b><a style="text-decoration: none; color: #ffffff;">LOG IN</a></b>
                    </button>
                </center>
            </form>
        </div>
    </div>
  </div>
</body>
</html>