<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <style>
        table {
            text-align: center;
        }

        .table1 table {
            background-color: #333;
            overflow: hidden;
            float: right;
            height: 100px;
            vertical-align: middle;
            border-radius: 25px;
        }

        .table1 a {
            padding: 100px 25px;
            text-decoration: none;
            font-size: 17px;
            color: white;
            text-align: center;

        }

        .table1 a:hover {
            background-color: #cf3476;
            color: white;
        }

        .demo a {
            padding: 100px 25px;
            text-decoration: none;
            font-size: 17px;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body bgcolor="whitesmoke">
    <div class="table1">
        <table>
            <td><a href="logout.php">Log Out</a></td>
        </table>
    </div>
    <br><br><br><br><br><br>
    <table bgcolor="#333" align="center" width=95% style='border-radius:50px;'>
    <tr style="height:25px;">
            <td></td>
            <td></td>
            <td></td>
            </tr>

        <tr>
            <td align=center>
                <div class='demo'>
                    <table style='height:250px;width:325px;background-color:#da7171;border-radius:50px;'>
                        <tr style='background-image:url("admin/1.jpg");color:white;font-weight:bold;font-size:40px;'>
                            <td style='border-radius: 50px;'>Add Students</td>
                        </tr>
                        <tr>
                            <td><a href="registration.php" style='height:30px;width:150px;font-size:30px;'>GO</a></td>
                        </tr>
                    </table>
            </td>
            </div>
            <td align=center>
                <div class='demo'>
                    <table style='height:250px;width:325px;background-color:#d0f0c0;border-radius:50px;'>
                        <tr style='background-image:url("admin/2.jpg");color:white;font-weight:bold;font-size:40px;'>
                            <td style='border-radius: 50px;'> Available Rooms</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="available.php" style='height:30px;width:150px;font-size:30px;'>GO</a></td>
                        </tr>
                    </table>
            </td>
            </div>
            <td align=center>
                <div class='demo'>
                    <table style='height:250px;width:325px;background-color:#e5e4e2;border-radius:50px;'>
                        <tr style='background-image:url("admin/3.jpg");color:white;font-weight:bold;font-size:40px;'>
                            <td style='border-radius: 50px;'>View Student Details</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="detail.php" style='height:30px;width:150px;font-size:30px;'>GO</a></td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr style="height:25px;">
            <td></td>
            <td></td>
            <td></td>
            </tr>

        <tr>
            <td align=center>
                <div class='demo'>
                    <table style='height:250px;width:325px;background-color:#a4dded;border-radius:50px;'>
                        <tr style='background-image:url("admin/4.jpg");color:white;font-weight:bold;font-size:40px;'>
                            <td style='border-radius: 50px;'>View Feedback</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="view_feedback.php" style='height:30px;width:150px;font-size:30px;'>GO</a></td>
                        </tr>
                    </table>
                </div>
            </td>
            <td align=center>
                <div class='demo'>
                    <table style='height:250px;width:325px;background-color:#ffc87c;border-radius:50px;'>
                        <tr style='background-image:url("admin/5.jpg");color:white;font-weight:bold;font-size:40px;'>
                            <td style='border-radius: 50px;'>Gatepass Requests</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="req_gatepass.php" style='height:30px;width:150px;font-size:30px;'>GO</a></td>
                        </tr>
                    </table>
                </div>
            </td>
            <td align=center>
                <div class='demo'>
                    <table style='height:250px;width:325px;background-color:#dda0dd;border-radius:50px;'>
                        <tr style='background-image:url("admin/6.jpg");color:white;font-weight:bold;font-size:40px;'>
                            <td style='border-radius: 50px;'>Room complains</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="req_complain.php" style='height:30px;width:150px;font-size:30px;'>GO</a></td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr style="height:25px;">
            <td></td>
            <td></td>
            <td></td>
            </tr>
    </table>
</body>

</html>