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
    
    
    $no = $_POST["no"];
    $name = $_SESSION['name'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    require ('_conn.php');
   
    $sql= "UPDATE `blog1` set `name`='$name',`category`='$category',`title`='$title',`content`='$content',`mod_date`=CURRENT_TIMESTAMP() where `no`= '$no'";
    
    $result= mysqli_query($conn, $sql);
    
    if ($result) {
              
        echo "<script>alert('글 수정이 완료되었습니다.');location.href='blog.php'</script>";
    }

 ?>
</body>
</html>
