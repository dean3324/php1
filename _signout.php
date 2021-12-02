<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singout</title>
</head>
<body>

<?php
  
  require('_conn.php');

    $no = $_SESSION['no'];
    // select : 조회, insert : 삽입 , delete :삭제 , update :변경
    $sql = "UPDATE `user` SET `del_flg` = 1 where `no`= $no";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        require('_logout.php');

        echo "<script>window.alert('회원탈퇴가 완료되었습니다. 안녕히 가십시요.');location.href='index.php'</script>";
    }
?>
</body>
</html>



