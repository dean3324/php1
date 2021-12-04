
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    //호스트, 유저명, 비밀번호, DB이름, 포트번호
    $conn = new mysqli("localhost","mariadb","mariadb","php");
    mysqli_query($conn, "set names utf8");

?>
</body>
</html>
