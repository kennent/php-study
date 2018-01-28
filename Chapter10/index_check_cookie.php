<?php
    require_once("lib/util.php");
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    if (isSet($_COOKIE["fruits"])) {
        $valueString = $_COOKIE["fruits"];
        $fruits = explode("&", $valueString);
        $fruits = es($fruits);
        echo "좋아하는 과일 : <br>";
        echo implode("<br>", $fruits), "<hr>";
    } else echo "쿠키는 없습니다<hr>";
?>
    <a href="index_set_cookie.php">돌아가기</a>
</div>
</body>
</html>