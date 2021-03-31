<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header('location:login.php');
    exit();
}
$connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['done'])) {
    $user = $_SESSION['username'];
    $sql = "UPDATE `complain`SET `status` = 'Done' where username='$user'";
    $connection->exec($sql);
    header('Location:req_complain.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Requests</title>
    <link rel="stylesheet" href="footer.css">
    <style>
        th {
            font-size: 25px;
        }

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

<body>

    <div class="table1">
        <table>
            <br><br>
            <tr>
                <td><a href="admin_home.php">HOME</a></td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <br><br><br>
    <?php
    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM complain WHERE status=''";
    $result = $connection->prepare($query);
    $flag = $result->execute();
    echo "<tbody>";
    echo "<table border='10' width=100%>";
    echo "<tr style='background-color:#008000;color:white;'><th>Username:</th><th>Name:</th><th>Floor No:</th><th>Room:</th><th>Reason:</th><th>Status:</th></tr>";
    if ($result->rowcount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr style='background-color:#d0f0c0;font-weight:bold;'>";
            echo "<td>" . $row['username'] . "</td>";
            $_SESSION['username'] = $row['username'];
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['no'] . "</td>";
            echo "<td>" . $row['room_no'] . "</td>";
            echo "<td>" . $row['reason'] . "</td>";
            echo "<form action='#' method='POST'><td>" . "<input type='submit' name='done' value='Done'>&nbsp;" . "</td></form>";
            echo "</tr>";
        }
    } else {
        echo "<p><em><tr><td  colspan='9'>No complains were found.</td></tr></em></p>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>

</html>