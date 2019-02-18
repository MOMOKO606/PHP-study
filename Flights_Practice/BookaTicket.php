<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/18
 * Time: 17:15
 * The front-end of booking a ticket.
 * Passing the flight number and the passenger's name to the back-end: BookaTicket_server.php
 */

$id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Please tell us your name.</title>
</head>
<body>
<form action="BookaTicket_server.php" method="post">
    <div>Please enter your name
        <input type="text" name="name" >
    </div>
    <input type="hidden" name="id" value="<?php echo "$id";?>">
    <input type="submit" value="Submit">
</form>
</body>
</html>