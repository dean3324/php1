<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    session_start();
    
    $no = $_SESSION['no'];
    require('_conn.php');
    
    // select : 조회, insert : 삽입 , delete :삭제 , update :변경
    $sql = "DELETE FROM user WHERE no='$no'"; 
      //데이터 베이스 표시는 ` ` 표시 1번 옆에
       $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>window.alert('회원탈퇴가 완료되었습니다. 안녕히 가십시요.');location.href='index.php'</script>"; 
        
    } 
   ?> 
</body>
</html>


