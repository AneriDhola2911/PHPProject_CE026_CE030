<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            margin-bottom: -200px;
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
            height: 100px;
            background: black;
            width: 100%;
            z-index: 10;
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

        .banner-area {
            width: 100%;
            height: 500px;
            position: fixed;
            top: 20px;
            background-color: #bcd4e6;
        }

        .banner-area h2 {
            padding-top: 2%;
            font-size: 70px;
            text-transform: uppercase;
            text-align: center;
            color: black;
            font-weight: bold;
        }

        .content-area {
            width: 100%;
            position: relative;
            top: 250px;
            background-color: #bcd4e6;
            height: 1000px;
        }

        .content-area h2 {
            letter-spacing: 4px;
            padding-top: 30px;
            font-size: 40px;
            margin: 0;
        }

        .content-area p {
            padding: 0px;
            line-height: 30px;
        }

        body {
            text-align: center;
            font-family: "calibri";
        }
        .loginbox input[type="text"],
        input[type="email"],
        input[type="textarea"] {
            border: none;
            border-bottom: 2px solid black;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
            width: 400px;

        }

        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #000080;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .loginbox input[type="reset"] {
            border: none;
            outline: none;
            height: 35px;
            background: #000080;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: #ffc107;
            color: #000;
        }

        .loginbox input[type="reset"]:hover {
            cursor: pointer;
            background: #ffc107;
            color: #000;
        }

        .table2 {
            border-radius: 25px 65px;
            background-color: gray;
            color: black;
            height: 150px;
            width: auto;
            overflow: hidden;
            text-align: center;
            color: white;
            padding-bottom: 30px;
        }

        .table2 img {
            height: 70px;
            width: 70px;
            margin-top: 45px;
        }
    </style>
</head>

<body>
    <div class="box-area">
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
        <div class="banner-area">
            <h2 style="height:100px;margin-top:100px;">Contact Us</h2>
        </div>
        <div class="content-area">
            <div class="wrapper">
                <b>
                    <table>&emsp;&nbsp;
                        <td bgcolor="navy" height="350" style="color:white;">
                            <h1>D<br>I<br>R<br>E<br>C<br>T<br>I<br>O<br>N
                        </td>
                        </h1>
                        &nbsp;&nbsp;
                        <TD width=80%><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2336.1592174005805!2d72.88185471825!3d22.683605243649616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5b273d43a6d5%3A0xd62b28ab0da769af!2sKrishna%20Hostel!5e0!3m2!1sen!2sin!4v1614751734128!5m2!1sen!2sin" width="1100" height="350" style="border:1;" loading="lazy"></iframe></td>
                    </table>
                    <br>
                    <div class="table2">
                        <table width=100% style="font-weight:bold;">
                            <td align="right"><img src="photos/home_logo.png"></img></td>
                            <td align="left"><br><br><br>Address :-<br>
                                37, Akshar Township,<br>Kishan Samosa Lane,<br> Collage Road,Nadiad, 387 001.</td>
                            <td align="right"><img src="photos/call_logo.png"></img></td>
                            <td align="left"><br><br><br>Call:-<br>
                                0268-XXXXXX<br> XXXXX-XXXXX</td>
                            <td align="right"><img src="photos/email_logo.png"></img></td>
                            <td align="left"><br><br><br>Email:-<br>
                                hostel.demo@gmail.com</td>
                        </table>
                    </div><br><br>
                    <div class="loginbox">
                        <form action="insertFeed.php" method="POST">
                            <center>
                                <table align="center" border="0" style="width:800px;height:300px;font-weight:bold;font-size:30px;color:black;" bgcolor="#addfad">
                                    <tr>
                                        <td style="text-align:center;">Name:</td>
                                        <td><input type="text" name="name" placeholder="Enter your name" required></td>
                                    </tr>
                                    <tr>
                                        <td  style="text-align:center ;">Email:</td>
                                        <td><input type="email" name="email"  placeholder="Enter your Email" required></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">Mobile:</td>
                                        <td><input type="text" name="mobile" placeholder="Enter your contact number" required></td>  
                                    </tr>
                                    <tr>
                                        <td style="text-align:center ;">Feedback:</td>
                                        <td><input type="textarea" name="feedback" placeholder="Enter your feedback about our website" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;" colspan="2"><input type="submit" name="submit" value="Submit" style="width:100px;height: 40px;background-color:green; font-size: large;font-weight: bold ;">
                                            <input type="reset" name="reset" value="Reset" style="width:100px;height: 40px;background-color:green; font-size: large;font-weight: bold ;">
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </form>
                        <br><br><br>
                    </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-bottom">
            Copyright &copy; 2021 Krishna Girls Hostel | All right reserved | Crafted & Managed by <a href="https://instagram.com/khushi.doshi20?igshid=11w8xhxdeqi8g" style="color:#00bfff;">Khushi Doshi</a> And <a href="https://www.facebook.com/aneri.dhola.7" style="color:#00bfff;">Aneri Dhola </a>
        </div>
    </div>
</body>
</html>