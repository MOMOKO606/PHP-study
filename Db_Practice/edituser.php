<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/17
 * Time: 20:59
 *
 * Front-end of editing user's information.
 * Step1.get the id from front-end(index.php).
 * Step2.get all the other values of the id from database, as default value.
 * Step3.Send the edited value to the back-end(edituser_server.php).
 */

require_once "functions.php";
//  Step1.get the id from front-end(index.php).
$id = $_GET["id"];
//  Sentinel of $id
if(!isset($id) || empty($id)){
    die("Cannot get the relative id");
}

//  Step2.get all the other values of the id from database, as default value.
$conn = ConnectDb();
$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");
$arr = mysqli_fetch_assoc($result);

$name = $arr["name"];
//  Sentinel of $name
if(!isset($name) || empty($name)) {
    die("Cannot get the new name.");
}

$age = $arr["age"];
//  Sentinel of $age
if(!isset($age) || empty($age)) {
    die("Cannot get the new name.");
}
?>
<!-- Step3.Send the edited value to the back-end(edituser_server.php). -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Please editing the user's information</title>
</head>
<body>
Editing user's information...
<form action="edituser_server.php" method="post">
    <div>Enter the new NAME
        <input type="text" name="name" value="<?php echo "$name"; ?>">
    </div>
    <div>Enter the new AGE
        <input type="text" name="age" value="<?php echo "$age"; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo "$id"; ?>" >
    <input type="submit" value="submit">
</form>
</body>
</html>
