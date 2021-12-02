<?php

    require('_conn.php');
    $sql = "select * from `user` where id='$id'";
    $result = mysqli_query($conn,$sql);
    foreach($result as $user) {

     $_SESSION['id'] = $user['id'];
     $_SESSION['no'] = $user['no'];
     $_SESSION['name'] = $user['name'];
     $_SESSION['address'] = $user['address'];
        
    }

?>