<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>== 연산자</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function holiday($day) {
    if (($day == '일요일') || ($day == '토요일')) {
        echo "{$day}은 쉬는 날입니다";
    } else {
        echo "{$day}은 쉬는 날이 아닙니다";
    }
}
holiday($str);
?>
</body>
</html>