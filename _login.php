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
   
    require('_conn.php');

    $id = $_POST["id"];
    $pw = $_POST["pw"];

    // select : 조회, insert : 삽입 , delete :삭제 , update :변경
    $sql = "select * from `user` where id='$id' and pw='$pw' and del_flg = 0";
    $result = mysqli_query($conn, $sql);
    $row = $result->num_rows; //결과값을 정수로 변환 1
    if($row >0 ) { //값이 있다면,
        //로그인 처리 
        require('_loginok.php');
        echo "<script>window.alert('로그인 완료!');location.href='index.php'</script>";
        
    }   else {
        echo "<script>window.alert('로그인 실패! 아이디, 비밀번호를 확인해 주세요.');location.href='index.php'</script>";
    }
        
    // print "$id";
?>
</body>
</html>



