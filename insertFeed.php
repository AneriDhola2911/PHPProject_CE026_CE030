<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Feedback</title>
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php
    session_start();
    $connection = new PDO('mysql:host=127.0.0.1;dbname=hostel_management', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = trim($_POST['name']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $feedback = trim($_POST['feedback']);

    //echo $name." ".$email."  ".$mobile."  ".$feedback;
    $query1 = "SELECT * FROM feedback WHERE email='$email'";
    $sql_res = $connection->prepare($query1);
    $flag = $sql_res->execute();
    if ($sql_res->rowcount() > 0) {
        $_SESSION['email_ver'] = 'This email is already exist.Please type another';
        header("location:feedback.php");
    }

    if (isset($_POST['submit']) == "POST") {
        $sql = "INSERT INTO `feedback`(`name`, `email`, `mobile`, `feedback`) VALUES (?,?,?,?)";
        $stmt = $connection->prepare($sql);

        if ($stmt) {
            $stmt->bindValue(1, $name, PDO::PARAM_STR);
            $stmt->bindValue(2, $email, PDO::PARAM_STR);
            $stmt->bindValue(3, $mobile, PDO::PARAM_STR);
            $stmt->bindValue(4, $feedback, PDO::PARAM_STR);
        }
        if ($stmt->execute()) {
            header("location:contact.php");
            exit();
        } else {
            echo "error";
        }
        $stmt->closeCursor();
    }

    ?><footer>© Copyright 2021 Krishna Girls Hostel,All right resrved, Managed by Khushi Doshi And Aneri Dhola </footer>
</body>

</html>