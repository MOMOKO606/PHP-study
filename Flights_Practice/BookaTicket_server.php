<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/18
 * Time: 17:26
 * Back-end of BookaTicket.php.
 * Step1. Get the flight number and the passenger's name.
 * Step2. Updated the database.
 */
require_once "functions.php";

//  Step1. Get the flight number and the passenger's name.
$flight_id = $_POST["id"];
$name = $_POST["name"];
//  Sentinel of passengers's name
if(!isset($name) || empty($name)){
    die("Cannot get passengers's name.");
}

//  Step2. Updated the database.
$conn = ConnectDb();
mysqli_query($conn,"INSERT INTO passengers (name,flight_id) VALUES ('$name','$flight_id')");

// The prompt of booking succeed.
$result = mysqli_query($conn,"SELECT * FROM flights WHERE flights.id=$flight_id");
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
    <title>Thanks for choosing Momoko Air!</title>
</head>
<body>
<h1> Congratulations! booking succeed! </h1>
<ul>
    <li>The flight you've just booked is from <?php echo "$origin"; ?> to <?php echo "$destination";?>. </li>
    <li><?php echo "$duration";?> miles.</li>
    <li>Flight number is <?php echo "$flight_id";?> </li>

</ul>
<a href=BookFlight.php>Clicking here to return to the main page...</a>
</body>
</html>
