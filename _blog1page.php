<?php
    //페이지네이션

    // 조회
    require ('_conn.php');
  
    $sql =  "select * from `blog1` where `del_flg` = 0 ";
 
    $result = mysqli_query($conn, $sql);



?>