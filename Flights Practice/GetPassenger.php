<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/1/24
 * Time: 14:07
 */
require_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passengers</title>
</head>
<body>
<table>
    <tr>
        <th>Flight_id</th><th>Passengers</th><th>Origin</th><th>Destination</th>
    </tr>
    <?php
    if( !isset($_POST["flight_id"]) || empty($_POST["flight_id"])){
        die("Cannot get flight_id");
    }
    $flight_id = $_POST["flight_id"];
    //  得到flight_id的航班信息。
    $conn = ConnectDb();
    $result = mysqli_query($conn,"SELECT * FROM flights WHERE id = $flight_id ");
    $arr = mysqli_fetch_assoc($result);
    $origin = $arr["origin"];
    $destination = $arr["destination"];
    //  得到flight_id的乘客信息。
    $result = mysqli_query($conn,"SELECT * FROM passengers WHERE flight_id = $flight_id");
    $rows = mysqli_num_rows($result);
    for($i=0;$i<$rows;$i++){
        $arr = mysqli_fetch_assoc($result);
        $name = $arr["name"];
        echo "<tr><td>$flight_id</td><td>$name</td><td>$origin</td><td>$destination</td></tr>";
    }
    ?>
</table>
</body>
</html>














