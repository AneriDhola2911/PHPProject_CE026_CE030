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
    <title>Available room details</title>
    <style>
        th {
            font-size: 25px;
        }

        .table1 {
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
          rgb(152,251,152,1),
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
    <br><br><br>

    <?php

    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<center><h1>Available floor and respective rooms are:</center></h1>";
    $floor = array("1", "2", "3", "4", "5", "6");
    $room_arr = array("01", "02", "03", "04", "05", "06");
    echo "<b><table border=10 bordercolor=#bb3385 height=300px width=400px align=center bgcolor=#d6cadd>";
    echo "<tr>";
    echo "<th>" . "Floor";
    echo "</th>";
    echo "<th colspan=6>" . "Room Numbers";
    echo "</th>";
    echo "</tr>";
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        echo "<td align=center>" . $floor[$i];
        echo "</td>";
        for ($j = 0; $j < 6; $j++) {
            $a = $floor[$i];
            $b = $room_arr[$j];
            $q1 = "SELECT count(no) AS count FROM user WHERE no=$a AND room_no=$b ";
            $q1_result = $connection->query($q1);
            $count = $q1_result->fetchColumn();
            if ($count < 3) {
                echo "<td align=center>";
                echo $room_arr[$j];
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table></b>";

    ?>
</body>

</html>