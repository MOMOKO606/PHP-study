<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2019/2/17
 * Time: 14:52
 * The main page(front-end) to show the id, name, age of all the users from "test database,users table".
 * You could turn to the other 2 front-ends of adding new user and editing user from here.
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
    <title>User's Information</title>
</head>
<body>

<!--Create a table to show all the data from database.-->
<table border="1">
    <tr>
        <th>id</th> <th>name</th> <th>age</th> <th>Edit</th> <th>Delete</th>
    </tr>
    <?php
    $conn = ConnectDb();  // Connect to database.
    $result = mysqli_query($conn,"SELECT * FROM users");  //  Get the handle of all the data in users table.
    $rows = mysqli_num_rows($result);  //  Get the # of rows of users table.
    for( $i = 0; $i < $rows; $i++){
        $arr = mysqli_fetch_assoc( $result );  // Get one line from the handle block.
        //  Get the information of id,name & age.
        $id = $arr["id"];
        $name = $arr["name"];
        $age = $arr["age"];
        //  show the id, name, age information.
        echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>Edit</a><td><a href='deleteuser_server.php?id=$id'>Delete</a></td></tr>";
    }
    ?>
</table>

<!--Jump to the interface of adding a new user(front end, static html interface).-->
<a href="adduser.html">Click to add a new user</a>

</body>
</html>


