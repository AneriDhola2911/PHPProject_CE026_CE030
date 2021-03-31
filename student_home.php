<?php
// if (!isset($_SESSION['student'])) {
//     header("location:login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="footer.css">
    <style>
        .table1 {
            background-color: #333;
            overflow: hidden;
            height: 100px;
            vertical-align: middle;
            text-align: right;
        }

        .table1 a {
            padding: 100px 25px;
            text-decoration: none;
            font-size: 17px;
            color: #f2f2f2;
        }

        .table1 a:hover {
            background-color: #cf3476;
            color: white;
        }
    </style>
</head>

<body bgcolor="#f5f5f5">
    <!-- <h1>Welcome student!!!</h1> -->
    <div class="table1">
        <table width=100%>
            <br><br>
            <tr>
                <td><a href="mess_menu.php">Mess Menu</a>
                    <a href="gatepass.php">Apply for Gatepass</a>
                    <a href="complain.php">Any complain?</a>
                    <a href="index.php">Log Out</a>
                </td>
            </tr>
        </table>
    </div>
    <br><br>
    <?php
    session_start();
    $user = $_SESSION['username'];
    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM user WHERE username='$user'";
    $result = $connection->prepare($query);
    $flag = $result->execute();
    if ($result->rowcount() > 0) {
        echo "<center><h1><u>Welcome '$user' </h1></center>";
        echo "<tbody>";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<table border='15' height='350px' width='400px' align='center'>";
    ?>
    <?php
            echo "<tr style='background-color:#fff8dc;'>";
            echo "<th>Name:</th>";
            echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fa8072;'>";
            echo "<th>Student Mobile:</th>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fff8dc;'>";
            echo "<th>EMail:</th>";
            echo "<td>" . ($row['email']) . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fa8072;'>";
            echo "<th>Birthdate:</th>";
            echo "<td>" . $row['bday'] . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fff8dc;'>";
            echo "<th>Room:</th>";
            echo "<td>" . ($row['no']) . $row['room_no'] . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fa8072;'>";
            echo "<th>Address:</th>";
            echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fff8dc;'>";
            echo "<th>Father's name:</th>";
            echo "<td>" . ($row['father_name']) . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fa8072;'>";
            echo "<th>Mother's name:</th>";
            echo "<td>" . $row['mother_name'] . "</td>";
            echo "</tr>";

            echo "<tr style='background-color:#fff8dc;'>";
            echo "<th>Parent's mobile:</th>";
            echo "<td>" . $row['parent_no'] . "</td>";
            echo "</tr>";

            echo "<br>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    ?>
</body>

</html>