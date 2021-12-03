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
 
    require('_conn.php');
    $sql = "select * from `user` where id ='$id'";
    $result = mysqli_query($conn,$sql);
    
    foreach($result as $user) {

    $_SESSION['id'] = $user['id'];
    $_SESSION['no'] = $user['no'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['address'] = $user['address'];
    
    }

?>
</body>
</html>
