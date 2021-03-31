<?php
$check = false;
if (isset($_POST['username']) && isset($_POST['password'])) {

    echo "hiiiiiiiiiiiiiiiiiiii";
    try {
        $dbase = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
        $dbase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $dbase->prepare("select * from user where username = ? AND  password = ? ");
        if ($stmt) {
            $stmt->bindValue(1, $_POST['username'], PDO::PARAM_STR);
            $stmt->bindValue(2, $_POST['password'], PDO::PARAM_STR);
            $stmt->execute();
            $a = $stmt->fetchAll(PDO::FETCH_ASSOC); // returns an array containing all of the remaining rows in the result set

            if (sizeof($a) == 0) {
                echo "<script>alert('Wrong Username/password');</script>";
                $_SESSION['temp'] = "error";
                $check = true;
            } else {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['isSigned'] = "SignedIn";
                $username =  $a[0]['username'];
                setcookie("username", $username, false, '.');
                $_SESSION['data'] = $a[0];
                if ($_SESSION["data"]["role"] == 'admin') {
                    $_SESSION['admin'] = "successA";
                    header("Location: admin_home.php");
                }

                if ($_SESSION["data"]["role"] == 'student') {
                    $_SESSION['student'] = "successS";
                    header("Location: student_home.php");
                }
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
}
if (!$check) {
    session_start();
    if (isset($_SESSION['isSigned']) && $_SESSION['isSigned'] == "wrong") {
        echo "wrong username or password!";
        $_SESSION['isSigned'] = 'WrongPass';
    }
    echo "Click " . "<a href='registration.php'>" . " here" . " </a> to registration.";
    echo "Click " . "<a href='index.php'>" . " here" . " </a> to login.";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website For Hostel</title>
    <link rel="shortcut icon" type="image/jpg" href="photos/logo2.jpg" />
    <link rel="stylesheet" href="footer.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            min-height: 100%;
        }

        .footer {
            position: relative;
            height: 50px;
        }

        .footer .footer-bottom {
            width: 100%;
            background-color: #343a40;
            color: #bfc1c2;
            height: 40px;
            margin-bottom: -500px;
            text-align: center;
            position: absolute;
            bottom: 0px;
            left: 0px;
            padding-top: 20px;
        }

        .wrapper {
            min-height: 100%;
            width: 1170px;
            margin: 0 auto;
        }

        header {
            margin-top: -20px;
            height: 100px;
            background: black;
            width: 100%;
            position: fixed;
        }

        .logo {
            width: 30%;
            float: left;
            line-height: 100px;
        }

        .logo a {
            text-decoration: none;
            font-size: 30px;
            font-family: poppins;
            color: #fff;
            letter-spacing: 5px;
        }

        nav {
            float: right;
            line-height: 100px;
        }

        nav a {
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 4px;
            font-size: 25px;
            margin: 0 10px;
            color: whitesmoke;
        }

        nav a:hover {
            background-color: whitesmoke;
            color: black;
        }

        body {
            font-family: "calibri";
        }

        .loginbox {
            width: 350px;
            height: 390px;
            background: #000;
            color: #fff;
            top: 60%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }

        h1 {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }

        .loginbox{
            border-radius: 20px;
        }

        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .loginbox input[type="reset"] {
            border: none;
            outline: none;
            height: 35px;
            background: #fb2525;
            color: #fff;
            font-size: 15px;
            border-radius: 20px;
        }

        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: #ffc107;
            color: #000;
        }

        .loginbox a {
            text-decoration: none;
            font-size: 17px;
            line-height: 20px;
            color: darkgrey;
        }

        .loginbox a:hover {
            color: red;
        }

        .table1 table {
            background-color: #333;
            overflow: hidden;
            float: right;
            height: 100px;

            text-align: center;
        }

        .table1 a {
            padding: 100px 25px;
            text-decoration: none;
            font-size: 17px;
            color: #f2f2f2;
            text-align: center;

        }

        .table1 a:hover {
            background-color: #cf3476;
            color: white;
        }
    </style>
</head>

<body bgcolor=#ffdab9>
    <br>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="photos/11.png" style="width:350px;height:95px;">
            </div>
            <nav>
                <a href="index.php">Home</a><a href="login.php">Log IN</a>
                <a href="amenities.php">Facilities</a>
                <a href="contact.php">Contact Us</a>
            </nav>
        </div>
    </header>
    <br>
    <br> <br> <br>
    <div class="loginbox">
        <img src="admin/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="#" method="POST">
            <p style="font-size: large;"> USERNAME:</p>

            <input type="text" name="username" placeholder="Enter Username">
            <p style="font-size: large;"> PASSWORD:</p>

            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Log In!!!">
            <center><a href="forget_password.php">Forgot Password?</a>

                <p>Register&nbsp; <a href=" registration.php">HERE</a>&nbsp; for new addmission
            </center>
        </form>
    </div><br>
    <div class="footer">
        <div class="footer-bottom">
            Copyright &copy; 2021 Krishna Girls Hostel | All right reserved | Crafted & Managed by <a href="https://instagram.com/khushi.doshi20?igshid=11w8xhxdeqi8g" style="color:#00bfff;">Khushi Doshi</a> And <a href="https://www.facebook.com/aneri.dhola.7" style="color:#00bfff;">Aneri Dhola </a>
        </div>
    </div>
</body>

</html>