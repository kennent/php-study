<?php
    require_once("lib/util.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    echo "쿠키를 확인했습니다<br>";
    if (isSet($_COOKIE["message"])) {
        $message = $_COOKIE["message"];
        echo "쿠키 값 : ", es($message), "<hr>";
        echo '<a href="delete_cookie.php">쿠키를 삭제한다</a>';
    } else {
        echo "쿠키는 없습니다<hr>";
        echo '<a href="set_cookie.php">쿠키를 설정하는 페이지로</a>';
    }
?>
</div>
</body>
</html>