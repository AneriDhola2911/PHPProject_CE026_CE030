<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Complain</title>
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php
    session_start();
    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['submit'])) {
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
            }
        }

        $sql = "INSERT INTO complain (username,name, no, room_no ,reason,status) VALUES (?,?,?,?,?,'')";
        $stmt = $connection->prepare($sql);

        if ($stmt) {
            $stmt->bindValue(1, $username, PDO::PARAM_STR);
            $stmt->bindValue(2, $name, PDO::PARAM_STR);
            $stmt->bindValue(3, $no, PDO::PARAM_STR);
            $stmt->bindValue(4, $room, PDO::PARAM_STR);
            $stmt->bindValue(5, $reason, PDO::PARAM_STR);
            if ($stmt->execute()) {
                header('location:complain.php');
                exit();
            } else {
                echo "error";
            }
            $stmt->closeCursor();
        }
    }
    ?>
    <footer>© Copyright 2021 Krishna Girls Hostel,All right resrved, Managed by Khushi Doshi And Aneri Dhola </footer>
</body>

</html>