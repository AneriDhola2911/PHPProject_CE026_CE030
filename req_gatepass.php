<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
    exit();
}

$connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['approve'])) {
    $user = $_SESSION['username'];
    $sql = "UPDATE `gatepass` SET `status` = 'Approved' WHERE status='Pending' AND username='$user'";
    $stmt = $connection->prepare($sql);
    $temp = $stmt->execute();
    header('Location:req_gatepass.php');
    exit();
}

if (isset($_POST['deny'])) {
    $user = $_SESSION['username'];
    $sql = "UPDATE `gatepass`SET `status` = 'Denied' WHERE status='Pending'  AND username='$user'";
    $stmt = $connection->prepare($sql);
    $temp = $stmt->execute();
    header('Location:req_gatepass.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatepass Requests</title>
    <link rel="stylesheet" href="footer.css">
    <style>
        table {
            text-align: center;
        }

        th {
            font-size: 28px;
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
          50deg,
          rgba(220,220,220,0.3),
          rgba(255,250,250,1)100%
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
    <br><br><br>
    <br><br><br>
    <?php
    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM gatepass WHERE status='Pending'";
    $result = $connection->prepare($query);
    $flag = $result->execute();

    echo "<tbody>";
    echo "<table border='2' width=100%>";
    echo "<tr style='background-color:#be0032;color:white;font-weight:bold;'><th>Username:</th><th>Name:</th><th>Floor No:</th><th>Room:</th><th>Parent's mobile:</th><th>Going Date:</th><th>Coming Date:</th><th>Reason:</th><th>Status:</th></tr>";
    if ($result->rowcount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<form action='#' method='POST'>";
            echo "<tr style='background-color:#ffefd5;'>";
            echo "<td>" . $row['username'] . "</td>";
            $_SESSION['username'] = $row['username'];
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['no'] . "</td>";
            echo "<td>" . $row['room_no'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['date1'] . "</td>";
            echo "<td>" . $row['date2'] . "</td>";
            echo "<td>" . $row['reason'] . "</td>";
            echo "<td>" . "<input type='submit' name='approve' value='Approve'>&nbsp;<input type='submit' name='deny' value='Deny'>" . "</td></form>";
            echo "</tr>";
        }
    } else {
        echo "<p><em><tr><td  colspan='9'>No requests were found.</td></tr></em></p>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>

</html>