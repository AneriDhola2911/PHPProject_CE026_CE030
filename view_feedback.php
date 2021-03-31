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
    <title>View Feedback</title>
    <link rel="stylesheet" href="footer.css">
    <style>
        table {
            text-align: center;
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
          45deg,
          rgba(135,206,250,0.7  ),
          rgba(251,204,231,1) 100%
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

    <?php
    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM feedback";
    $sql_res = $connection->query($sql);
    $flag = $sql_res->execute();
    if ($sql_res->rowcount() > 0) {
        echo "<tbody>";
        echo "<table align=center border='2' width=100%>";
        echo "<tr style='color:white;font-size:30px;' bgcolor=#333 height='50px'><th>Name:</th><th>Mobile:</th><th>EMail:</th><th>Feedback:</th></tr>";
        while ($row = $sql_res->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr style='background-color:#e5e4e2;color:#333;font-weight:bold;font-size:20px;' height='35px'>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . ($row['email']) . "</td>";
            echo "<td>" . $row['feedback'] . "</td>";
            echo "</tr></b>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p><em>No records were found.</em></p>";
    }
    ?>
</body>

</html>