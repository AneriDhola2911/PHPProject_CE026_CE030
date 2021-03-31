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
    <title>Mess Menu</title>
    <link rel="stylesheet" href="footer.css">
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
            font-size: 17px;
            color: #f2f2f2;
        }

        .table1 a:hover {
            background-color: #cf3476;
            color: white;
        }
    </style>
</head>

<body bgcolor="#d0f0c0">
    <div class="table1">
        <table width=100%>
            <br><br>
            <tr>
                <td><a href="student_home.php">HOME</a></td>
            </tr>
        </table>
    </div>
    <h1>
        <center>MESS MENU</center>
    </h1>
    <table style="border-color:#c74375;margin-left:auto;margin-right:auto;background-color:#fae7b5;" border="20">
        <tr>
            <h1>
                <th>Day</th>
                <th>BreakFast</th>
                <th>Lunch</th>
                <th>Dinner</th>
            </h1>
        </tr>
        <tr>
            <th>Monday</th>
            <th>
                <ul>
                    <li>tomatoes</li>
                    <li>flavourful vegetables</li>
                    <li>creamy yogurt and filing bread</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>Tortilla español</li>
                    <li>Kushari</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>masala dosa <ul>
                            <li>pancake with onion and potato filling</li>
                            <li>accompanied by flavourful chutneys</li>
                        </ul>
                    </li>
                </ul>
            </th>
        </tr>
        <tr>
            <th>Tuesday</th>
            <th>
                <ul>
                    <li>soy milk</li>
                    <li>dumplings</li>
                    <li>fried turnip cakes and sesame balls</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>roti</li>
                    <li>beans(sabji)</li>
                    <li>seasonable sabji</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>noodle</li>
                    <li>other chinese items</li>
                </ul>
            </th>
        <tr>
            <th>Wednesday</th>
            <th>
                <ul>
                    <li>Pampoenkoekies</li>
                    <li>Caldo Verde</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>jackfruit curry</li>
                    <li>puri,
                        sabji</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>aaloo parath and curd</li>
                    <li>green biriyani</li>
                </ul>
            </th>
        </tr>
        <tr>
            <th>Thrusday</th>
            <th>
                <ul>
                    <li>Sausages</li>
                    <li>baked beans</li>
                    <li>pancakes with maple syrup</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>Edamame</li>
                    <li>tacos</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>pav-bhaji</li>
                    <li>pulav</li>
                </ul>
            </th>
        </tr>
        <tr>
            <th>Friday</th>
            <th>
                <ul>
                    <li>puri</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>roti,
                        sabaji</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>bhakhri</li>
                    <li>sabji,
                        khichadi</li>
                </ul>
            </th>
        </tr>
        <tr>
            <th>saturday</th>
            <th>
                <ul>
                    <li>corn mixed rice </li>
                    <li>hummus </li>
                    <li>manakish</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>vada,
                        uttapum</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>panni-puri</li>
                    <li>rice</li>
                </ul>
            </th>
        </tr>
        <tr>
            <th>Sunday</th>
            <th>
                <ul>
                    <li>tos/bread</li>
                    <li>puri</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>Shakshouka</li>
                </ul>
            </th>
            <th>
                <ul>
                    <li>Punjabi</li>
                </ul>
            </th>
        </tr>
</body>

</html>