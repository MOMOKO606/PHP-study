<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: bianl
 * Date: 2018/12/25
 * Time: 15:03
 */

$conn = @mysqli_connect('localhost','root',''); //连接服务器

if ($conn){
    echo '连接成功<br>';
    mysqli_select_db($conn,'test');
    $result = mysqli_query($conn,'SELECT * FROM users');
//    $result_arr = mysqli_fetch_assoc($result);
    $rows = mysqli_num_rows($result);
    for( $i = 0;$i < $rows; $i++ ){
        print_r ( mysqli_fetch_assoc($result) );
    }
}else{
    echo '连接失败';
}
?>

</body>
</html>
