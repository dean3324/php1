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

    //회원가입
    require('_conn.php');

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $pwc = $_POST["pwc"];
    $name = $_POST["name"];
    $addr = $_POST["address"];

    //아이디가 중복된 경우
    $sql = "select * from `user` where id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = $result->num_rows; //결과값을 정수로 변환 1
    if($row >0 ) { //값이 있다면,
        // 아이디가 중복된 경우 
        echo "<script>window.alert('You cant use this ID!');location.href='join.php'</script>";
    } 

    //잘못 입력한 경우
    if($pw != $pwc) {
        echo "<script>window.alert('Check your password');location.href='index.php'</script>";
    } 

    // select : 조회, insert : 삽입 , delete :삭제 , update :변경
    $sql = "insert into `user` (`id`,`pw`,`name`,`address`) value ('$id','$pw','$name','$addr')" ;
    $result = mysqli_query($conn, $sql);
    if($result) { // result 값이 있다면,
        // 회원 가입 후 로그인 처리 
        require('_loginok.php');
        echo "<script>window.alert('회원가입 완료!');location.href='index.php'</script>";
    }   else {
        echo "<script>window.alert('회원가입 실패!');location.href='join.php'</script>";
    }
        
    // print "$id";
?>
</body>
</html>