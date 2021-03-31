<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .loginbox input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="address"] {
            border: none;
            border-bottom: 2px solid black;
            background: transparent;
            outline: none;
            height: 40px;
            color: black;
            font-size: 16px;
            width: 300px;
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

        .loginbox a {
            text-decoration: none;
            font-size: 17px;
            line-height: 20px;
            color: darkgrey;
        }

        .loginbox a:hover {
            color: red;
        }

        .table1 {
            margin-left: 82%;
            background-color: #333;
            overflow: hidden;
            height: 100px;
            text-align: center;
            border-radius: 25px;
        }

        .table1 a {
            padding: 100px 25px;
            text-decoration: none;
            font-size: 20px;
            color: white;
        }

        .table1 a:hover {
            background-color: #cf3476;
            color: white;
        }

        body {
            background-size: cover;
            background-repeat: no-repeat;
            font-weight: bold;
            background-color: #f5f5f5;
        }

        .backg {
            font-size: 23px;
            align: center;
        }

        .backg input {
            border-radius: 25px;

        }
    </style>
</head>

<body>
    <div class="table1">
        <table>
            <br><br>
            <tr>
                <td><a href="admin_home.php">Home</a></td>
                <td> <a class="active" href="login.php">Log in</a>
                </td>
            </tr>
        </table>
    </div>
    <font size="7" style="font-weight:bold;color: #000080;">
        <center><u>Registration Form</u></center>
    </font>
    <form action="insertData.php" method="POST" enctype="multipart/form-data">
        <div class="loginbox">
            <font color="black">
                <table align="center" style="background-color:#add8e6;color:black;font-weight:bold;height:400px;border-radius: 50px;" width="50%">
                    <div class="input">
                        <tr>
                            <td align="right">Name:</td>&nbsp;&nbsp;
                            <td><input type="text" name="name" required></td>
                        </tr>

                        <tr>
                            <td align="right"> Mobile No:</td>
                            <td><input type="text" name="mobile" required></td>
                        </tr>
                        <tr>
                            <td align="right">Email:</td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td align="right">Birthdate:</td>
                            <td><input type="date" name="bday" value="<?php echo date('Y-m-d'); ?>" required></td>
                        </tr>
                    </div>
                    <tr>
                        <td align="right">Room:</td>
                        <div class="fn">
                            <td>Floor: <select name="floor_name" required>
                                    <option name="1">1</option>
                                    <option name="2">2</option>
                                    <option name="3">3</option>
                                    <option name="4">4</option>
                                    <option name="5">5</option>
                                    <option name="6">6</option>
                                </select>
                                Room: <select name="room_name">
                                    <option name="01">01</option>
                                    <option name="02">02</option>
                                    <option name="03">03</option>
                                    <option name="04">04</option>
                                    <option name="05">05</option>
                                    <option name="06">06</option>
                                </select>
                            </td>
                        </div>
                    </tr>
                    <div class="input">
                        <tr>
                            <td align="right">Username:</td>
                            <td><input type="text" name="username1"></td>
                        </tr>

                        <tr>
                            <td align="right">Password:</td>
                            <td><input type="password" name="password1"></td>
                        </tr>
                        <tr>
                            <td align="right">Re-enter Password:</td>
                            <td><input type="password" name="password2"></td>
                        </tr>
                        <tr>
                            <td align="right">Father's full name:</td>
                            <td><input type="text" name="f_name" required></td>
                        </tr>
                        <tr>
                            <td align="right">Mother's full name:</td>
                            <td><input type="text" name="m_name" required></td>
                        </tr>
                        <tr>
                            <td align="right">Parent's Mobile No:</td>
                            <td><input type="text" name="p_no" required></td>
                        </tr>
                        <tr>
                            <td align="right">Address:</td>
                            <td><input type="address" name="address" rows="5" cols="70" required></td>
                        </tr>
                    </div>
                    <tr>
                        <td colspan="2" align="center"> <input type="submit" name="submit" value="Log In!!!">&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </font>
        </div>
    </form>
    <?php

    // $_SESSION['username_err']=$_SESSION['password_err']=$_SESSION['$mobile_err']=$_SESSION['email_err']
    if (!empty($_SESSION['name_err'])) {
        echo  "<script>alert('" . $_SESSION['name_err'] . "');</script>";
        session_destroy();
    } elseif (!empty($_SESSION['mobile_err'])) {
        echo  "<script>alert('" . $_SESSION['mobile_err'] . "');</script>";
        session_destroy();
    } elseif (!empty($_SESSION['email_err'])) {
        echo  "<script>alert('" . $_SESSION['email_err'] . "');</script>";
        session_destroy();
    } elseif (!empty($_SESSION['username_err'])) {
        echo  "<script>alert('" . $_SESSION['username_err'] . "');</script>";
        session_destroy();
    } elseif (!empty($_SESSION['password_err'])) {
        echo  "<script>alert('" . $_SESSION['password_err'] . "');</script>";
        session_destroy();
    }
    ?>
</body>

</html>