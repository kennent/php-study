<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>vsprintf()</h1>
<?php
$today = vsprintf('오늘은 %04d년 %02d월 %02d일입니다', array(2018, 1, 5));
print($today);
?>
</body>
</html>