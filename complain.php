<?php
session_start();
if (!isset($_SESSION['student'])) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain</title>
    <style>
        .table1 {
            background-color: #333;
            overflow: hidden;
            height: 100px;
            text-align: right;

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

        table {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }

        table input {
            border-radius: 25px;
        }
    </style>
</head>

<body>
    <div class="table1" width=100%>
        <br><br>
        <a href="student_home.php">HOME</a>
    </div>
    <br>
    <form action="insertComplain.php" method="POST">
        <div class="demo">
            <table align="center" BORDERCOLOR=#4682b4 border="3" bgcolor="#e7feff" width="500px" height="250px">

                <div class="backg">
                    <tr>
                        <td>Complain Description:</td>
                        <td><input type="text" name="reason" required></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="submit" value="Apply" required></td>
                    </tr>
                </div>
            </table>
    </form>
    <br><br><br>
    <?php
        $user = $_SESSION['username'];
        $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM complain WHERE username='$user' order by id DESC";
        $result = $connection->prepare($query);
        $flag = $result->execute();
        if ($result->rowcount() > 0) {
            echo "<tbody>";
            echo "<table border='2' width=90% align='center'>";
            echo "<tr style='background-color:#4682b4;color:white;'><th>Username:</th><th>Name:</th><th>Floor No:</th><th>Room:</th><th>Complain:</th><th>Status:</th></tr>";

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr style='background-color:#e7feff;'>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['no'] . "</td>";
                echo "<td>" . $row['room_no'] . "</td>";
                echo "<td>" . $row['reason'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
        }
    ?>
</body>

</html>