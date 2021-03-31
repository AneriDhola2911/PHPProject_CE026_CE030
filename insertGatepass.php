<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Gatepass</title>
</head>

<body><?php
        session_start();
        $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (isset($_POST['submit'])) {
            $date1 = $_POST['go'];
            $date2 = $_POST['come'];
            $reason = $_POST['reason'];
            $_SESSION['status'] = "Pending";
            $username = $_SESSION['username'];

            $q1 = "SELECT * FROM user where username='$username'";
            $result = $connection->prepare($q1);
            $flag = $result->execute();
            if ($result->rowcount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $name = $row["name"];
                    $no = $row["no"];
                    $room = $row["room_no"];
                    $mobile = $row["parent_no"];
                }
            }
            $sql = "INSERT INTO gatepass (username,name, no, room_no ,mobile,date1,date2,reason,status) VALUES (?,?,?, ?, ? ,?, ?,?,'Pending')";
            $stmt = $connection->prepare($sql);

            if ($stmt) {
                $stmt->bindValue(1, $username, PDO::PARAM_STR);
                $stmt->bindValue(2, $name, PDO::PARAM_STR);
                $stmt->bindValue(3, $no, PDO::PARAM_STR);
                $stmt->bindValue(4, $room, PDO::PARAM_STR);
                $stmt->bindValue(5, $mobile, PDO::PARAM_STR);
                $stmt->bindValue(6, $date1, PDO::PARAM_STR);
                $stmt->bindValue(7, $date2, PDO::PARAM_STR);
                $stmt->bindValue(8, $reason, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    header('location:student_home.php');
                    exit();
                } else {
                    echo "error";
                }
                $stmt->closeCursor();
            }
        }
        ?>
</body>

</html>