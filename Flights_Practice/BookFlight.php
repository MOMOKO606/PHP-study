<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/18
 * Time: 15:06
 * Show all the flights Momoko Air has.
 * You can check each flight's detail,and of course, you can book one as you want.
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
    <title>Welcome to Momoko Air!</title>
</head>
<body>
<h1>Welcome to Momoko Air! Enjoy your day!</h1>
<!--Create a table to show all the flights.-->
<table border="1">
    <tr>
        <th>Flight number</th>
        <th>Origin</th>
        <th>Destination</th>
        <th>Duration(km)</th>
        <th>Details</th>
        <th>Book</th>
    </tr>
    <?php
    $conn = ConnectDb();  // Connect to database.
    $result = mysqli_query($conn, "SELECT * FROM flights");  //  Get the handle of all the data in users table.
    $rows = mysqli_num_rows($result);  //  Get the # of rows of flights table.
    for ($i = 0; $i < $rows; $i++) {
        $arr = mysqli_fetch_assoc($result);  // Get one line from the handle block.
        //  Get the information of id,origin, destination, duration.
        $id = $arr["id"];
        $origin = $arr["origin"];
        $destination = $arr["destination"];
        $duration = $arr["duration"];
        //  show id, origin, destination, duration.
        echo "<tr>
                  <td>$id</td>
                  <td>$origin</td>
                  <td>$destination</td>
                  <td>$duration</td>
                  <td><a href='Details.php?id=$id'>Details</a></td>
                  <td><a href='BookaTicket.php?id=$id'>Book</a></td>
             </tr>";
        }
    ?>
</table>
</body>
</html>



