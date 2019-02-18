<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/1/24
 * Time: 11:47
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
    <title>All the flights</title>
</head>
<body>
<table border="1">
    <tr>
        <th>id</th><th>Origin</th><th>Destination</th><th>Duration</th>
    </tr>
    <?php
    $conn = ConnectDb();
    $result = mysqli_query($conn,"SELECT * FROM flights");
    $rows = mysqli_num_rows($result);
    for($i=0;$i<$rows;$i++){
        $arr=mysqli_fetch_assoc($result);
        $id = $arr["id"];
        $origin = $arr["origin"];
        $destination = $arr["destination"];
        $duration = $arr["duration"];
        echo "<tr><td>$id</td><td>$origin</td><td>$destination</td><td>$duration</td></tr>";
    }
    ?>
</table>
<form action="GetPassenger.php" method="post">
    <div>Please enter a flight id</div>
        <input type="text" name="flight_id">
        <input type="submit" value="提交">
</form>
</body>
</html>

