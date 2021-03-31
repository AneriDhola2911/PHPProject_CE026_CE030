<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
    exit();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        .fn td {
            text-align: center;
            border-radius: 25px;
            font-size: 30px;
        }

        .fn table {
            border-radius: 15px 50px;
        }

        .sec {
            text-align: center;
            font-size: 20px;
        }

        .table1 {
            margin-right: 5%;
            background-color: #333;
            overflow: hidden;
            float: right;
            height: 100px;
            vertical-align: middle;

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

<body style="
        background: linear-gradient(
          60deg,
          rgb(220,220,220,1),
          rgba(220,220,220,1) 100%
        );
      ">
    <div class="table1">
        <table>
            <br><br>
            <tr>
                <td><a href="admin_home.php">HOME</a></td>
            </tr>
        </table>
    </div>
    <br><br>
    <br><br><br><br>
    <form action="#" method="POST">
        <div class="fn"><b>
                <table align="center" width=90%>
                    <tr>
                        <td>
                            <table marginright="50px" align="right" height="150px" width="300px" cellpadding=20px>
                                <tr>
                                    <td bgcolor="#ce2029" style='color:white;'>Floor:</td>
                                    <td bgcolor="#ce2029" color="white"><select name="floor_name">
                                            <option name="1">1</option>
                                            <option name="2">2</option>
                                            <option name="3">3</option>
                                            <option name="4">4</option>
                                            <option name="5">5</option>
                                            <option name="6">6</option>
                                        </select></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table align="left" height="150px" width="300px" cellpadding=20px>
                                <tr bgcolor="#ce2029" style='color:white;'>
                                    <td> Room: </td>
                                    <td><select name="room_name">
                                            <option name="01">01</option>
                                            <option name="02">02</option>
                                            <option name="03">03</option>
                                            <option name="04">04</option>
                                            <option name="05">05</option>
                                            <option name="06">06</option>
                                        </select></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2"><input type="submit" name="submit" value="Fetch Details" style='height:70px;width:200px;background-color:#140000;color:white;font-weight:bold; border-radius: 15px 50px; '>
                            <input type="reset" name="reset" value="Reset" style='height:70px;width:200px;background-color:#140000;color:white;font-weight:bold; border-radius: 50px 15px; '>
                        </td>
                    </tr>
                </table>
        </div></b>
        <div class="sec">
            <?php

            $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if (isset($_POST['submit'])) {
                $floor_no = $_POST["floor_name"];
                $room_no = $_POST["room_name"];
                $query = "SELECT * FROM user WHERE no=$floor_no AND room_no=$room_no";
                $result = $connection->prepare($query);
                $flag = $result->execute();
                if ($result->rowcount() > 0) {
                    echo "<tbody>";
                    echo "<table border='5' width=100%>";
                    echo "<tr bgcolor=#ce2029 style='color:white;height:40px;' ><th>Username:</th><th>Student Mobile:</th><th>EMail:</th><th>Birthday:</th><th>Address:</th><th>Father's name:</th><th>Mother's name:</th><th>Parent's mobile:</th></tr>";
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr bgcolor=white><td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "<td>" . ($row['email']) . "</td>";
                        echo "<td>" . ($row['bday']) . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . ($row['father_name']) . "</td>";
                        echo "<td>" . $row['mother_name'] . "</td>";
                        echo "<td>" . $row['parent_no'] . "</td></tr>";
                        echo "<br>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<p><em>No records were found.</em></p>";
                }
            }
            ?></div>
        </b>
</body>

</html>