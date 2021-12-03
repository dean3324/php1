<html>
<!DOCTYPE html> 
<php lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<?php
    session_unset();
    session_destroy();
    session_start();
echo "<script>alert('로그아웃되었습니다.');location.href='index.php'</script>";

?>

</body>
</html>
