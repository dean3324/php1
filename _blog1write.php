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
    
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $title = $_POST["title"];
    $category = $_POST["category"];
    $content = $_POST["content"];
    
    require('_conn.php');
    $sql = "INSERT INTO `blog1` (`name`,`title`,`category`,`content`, `id`) VALUE ('$name','$title','$category','$content','$id')" ;
    
    $result = mysqli_query ($conn, $sql);
    
    if($result) {

        echo "<script>alert('글 작성이 완료되었습니다!');location.href='blog.php'</script>";
    } else {

        Echo "<script>alert('오류');localtion.href='blog1write.php'</script>";
    }

?>
</body>
</html>





