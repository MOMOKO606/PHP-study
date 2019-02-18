<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/18
 * Time: 16:21
 * Show the details of the selected flight(front-end).
 * Step1.get flight number which is saved in $id.
 * Step2.get all the information from flights table.
 * Step3.get all the information from passengers table.
 */

require_once "functions.php";

// Step1.get flight number.
$id = $_GET["id"];

// Connect to database.
$conn = ConnectDb();

// Step2.get all the information from flights table.
$result = mysqli_query($conn,"SELECT * FROM flights WHERE flights.id =$id");
$arr = mysqli_fetch_assoc($result);

$origin = $arr["origin"];
$destination = $arr["destination"];
$duration = $arr["duration"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flight Information</title>
</head>
<body>
<h1>Flight Details</h1>
<ul>
    <li>Origin:<?php echo "$origin"; ?></li>
    <li>Destination:<?php echo "$destination"; ?></li>
    <li>Duration:<?php echo "$duration"; ?> miles</li>
</ul>
<?php
// Step3.get all the information from passengers table.
$result = mysqli_query($conn,"SELECT * FROM passengers WHERE passengers.flight_id =$id");
$rows = mysqli_num_rows($result);
if(!isset($rows) || empty($rows)){
    echo "<h1>This flight has no passenger now.</h1>";
}else{
    echo "<h1>Passenages:</h1>";
    echo "<ul>";
    for($i = 0;$i < $rows; $i++){
        $arr = mysqli_fetch_assoc($result);
        $name = $arr["name"];
        echo "<li>$name</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>







