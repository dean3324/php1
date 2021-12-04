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

  $no = $_REQUEST['no'];

  // select : 조회, insert : 삽입 , delete :삭제 , update :변경
  // DB에 남기고 삭제
  // $sql = "UPDATE `blog1` SET `del_flg` = 1 where `no`= $no";

  //완전 삭제
  
  $sql = "DELETE FROM `blog1` WHERE `no`=$no";
 
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
       
        echo "<script>window.alert('글 삭제가 완료 되었습니다.');location.href='blog.php'</script>";
                }
?>    


</body>
</html>



