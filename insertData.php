<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insertion</title>
    <link rel="stylesheet" href="footer.css">
    <style>
        body {
            background-color: lightcyan;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $name = $username = $password = $mobile = $room = $no = $email = "";
    $_SESSION['username_err'] = $_SESSION['password_err'] = $_SESSION['$mobile_err'] = $_SESSION['email_err'] = $_SESSION['name_err'] = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input_name = trim($_POST["name"]);
        if (empty($input_name)) {
            $_SESSION["name_err"] = "Please enter a name.";
            header("location:registration.php");
            exit();
        } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
            $_SESSION["name_err"] = "Please enter a valid name.";
            header("location:registration.php");
            exit();
        } else {
            $name = $input_name;
        }

        $input_mobile = trim($_POST["mobile"]);
        $query1 = "SELECT * FROM user WHERE mobile='$input_mobile'";
        $q = $connection->query($query1);
        $r = $q->fetch(PDO::FETCH_ASSOC);
        if (!empty($r)) {
            $_SESSION['mobile_err'] = 'This mobile no. is already exist.Please type another';
            header("location:registration.php");
            exit;
        }
        if (empty($input_mobile)) {
            $_SESSION['mobile_err'] = "Please enter mobile number";
            header("location:registration.php");
            exit;
        } elseif (!preg_match("/^[6-9]\d{9}$/", $_POST['mobile'])) {
            $_SESSION['mobile_err'] = "Invalid mobile number";
            header("location:registration.php");
            exit;
        } else {
            $mobile = $input_mobile;
        }

        $email = $_POST["email"];
        $query1 = "SELECT * FROM user WHERE email='$email'";
        $q = $connection->query($query1);
        $r = $q->fetch(PDO::FETCH_ASSOC);
        if (!empty($r)) {
            $_SESSION['email_err'] = 'This email is already exist.Please type another';
            header("location:registration.php");
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email_err'] = "Invalid format and please re-enter valid email";
            header("location:registration.php");
            exit;
        } else {
            $email = $_POST["email"];
        }

       

        $input_username = $_POST["username1"];
        $query1 = "SELECT * FROM user WHERE username='$input_username'";
        $q = $connection->query($query1);
        $r = $q->fetch(PDO::FETCH_ASSOC);
        if (!empty($r)) {
            $_SESSION['username_err'] = 'This username is already exist.Please type another';
            header("location:registration.php");
            exit;
        }
        if (empty($input_username)) {
            $_SESSION['username_err'] = "Please enter a username.";
            header("location:registration.php");
            exit();
        } elseif (!preg_match("/^[a-zA-Z0-9]{7,}$/", $input_username)) {
            $_SESSION['username_err'] = "Please use letters and numbers only,and length must be more than or equal to 8";
            header("location:registration.php");
            exit();
        } else {
            $username = $input_username;
        }

        $input_password = trim($_POST["password1"]);
        $input_password2=trim($_POST["password2"]);
        if (empty($input_password)) {
            $_SESSION['password_err'] = "Please enter password";
            header("location:registration.php");
            exit;
        }elseif ($input_password!=$input_password2) {
            $_SESSION['password_err'] = "Please enter same password";
            header("location:registration.php");
            exit;
        }
         elseif (!preg_match('/^[a-zA-Z0-9]{6,}$/', $input_password)) {
            $_SESSION['password_err'] = "Please use letters and numbers only,and length must be more than or equal to 6";
            header("location:registration.php");
            exit;
        } else {
            $password = $input_password;
        }
        $date = ($_POST["bday"]);
        $room = ($_POST["room_name"]);
        $no = $_POST["floor_name"];
        $f_name = trim($_POST["f_name"]);
        $m_name = trim($_POST["m_name"]);


        $p_no = $_POST["p_no"];
        $add = trim($_POST["address"]);

        try {
            if (empty($name_err) && empty($password_err) && empty($mobile_err) && empty($username_err) && empty($email_err)) {
                //check if room is already occupied or not
                $query = "SELECT COUNT(no) as count FROM user WHERE room_no = $room and no=$no";
                //$stmt = $connection->prepare($sql);
                $result = $connection->query($query);
                $count = $result->fetchColumn();
                //echo $count;
                if ($count >= 3) {
                    echo "<h1>Sorry!!! This room is already occupied .Please choose another room.</h1>";
                    echo "<p style='text-align:center;font-weight:bold;font-size:20px;'>Available floor and respective rooms are:</p>";
                    $floor = array("1", "2", "3", "4", "5", "6");
                    $room_arr = array("01", "02", "03", "04", "05", "06");
                    echo "<table border=1 width=40% align='center' height=400px style='text-align:center;font-weight:bold;'>";
                    echo "<tr>";
                    echo "<th>" . "Floor";
                    echo "</th>";
                    echo "<th colspan=6>" . "Room Numbers";
                    echo "</th>";
                    echo "</tr>";
                    for ($i = 0; $i < 6; $i++) {
                        echo "<tr>";
                        echo "<td>" . $floor[$i];
                        echo "</td>";
                        for ($j = 0; $j < 6; $j++) {
                            $a = $floor[$i];
                            $b = $room_arr[$j];
                            $q1 = "SELECT count(no) AS count FROM user WHERE no=$a AND room_no=$b ";
                            $q1_result = $connection->query($q1);
                            $count = $q1_result->fetchColumn();
                            if ($count < 3) {
                                echo "<td>";
                                echo $room_arr[$j];
                                echo "</td>";
                            }
                        }
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo "<h3 style='text-align:center;font-weight:bold;'>Click <a href='registration.php'> HERE </a>to register again.</h3>";

                    $exe = "SELECT room_no FROM user WHERE (SELECT COUNT(room_no) FROM user WHERE room_no=$room and no=$no)<3;";
                    $res = $connection->query($exe);
                    $ct = $res->rowCount();
                    $flag = $res->execute();

                    if ($res->rowcount() > 0) {
                        echo "<tbody>";

                        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                            echo "<table border='2'>";

                            echo "<tr>";
                            echo "<th>Floor_number</th>";
                            echo "<td>" . $row['no'] . "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<th>Room_number</th>";
                            echo "<td>" . $row['room_no'] . "</td>";
                            echo "</tr>";

                            echo "</table>";
                        }
                        echo "</tbody>";
                    }
                    exit();
                }
                $sql = "INSERT INTO user (username,name, password, mobile ,no, room_no ,father_name,mother_name,parent_no,address,email,bday,role) VALUES (?,?,?, ?, ? ,?, ?,?,?,?,?,?,'student')";
                $stmt = $connection->prepare($sql);

                if ($stmt) {
                    $stmt->bindValue(1, $username, PDO::PARAM_STR);
                    $stmt->bindValue(2, $name, PDO::PARAM_STR);
                    $stmt->bindValue(3, $password, PDO::PARAM_STR);
                    $stmt->bindValue(4, $mobile, PDO::PARAM_STR);
                    $stmt->bindValue(5, $no, PDO::PARAM_STR);
                    $stmt->bindValue(6, $room, PDO::PARAM_STR);
                    $stmt->bindValue(7, $f_name, PDO::PARAM_STR);
                    $stmt->bindValue(8, $m_name, PDO::PARAM_STR);
                    $stmt->bindValue(9, $p_no, PDO::PARAM_STR);
                    $stmt->bindValue(10, $add, PDO::PARAM_STR);
                    $stmt->bindValue(11, $email, PDO::PARAM_STR);
                    $stmt->bindValue(12, $date, PDO::PARAM_STR);
                    $stmt->execute();
                    $stmt->closeCursor();
                }
                $sql2 = "INSERT INTO usertable (name,email,password) Values (?,?,?)";
                $stmt2 = $connection->prepare($sql2);
                if ($stmt2) {
                    $stmt2->bindValue(1, $username, PDO::PARAM_STR);
                    $stmt2->bindValue(2, $email, PDO::PARAM_STR);
                    $stmt2->bindValue(3, $password, PDO::PARAM_STR);
                    $stmt2->execute();
                    header("location:login.php");
                        exit();
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    ?>
</body>

</html>