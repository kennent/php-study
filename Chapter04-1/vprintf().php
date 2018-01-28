<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>vprintf()</h1>
<?php
$today= array(2018, 1, 5);
vprintf("오늘은 %04d년 %02d월 %02일입니다", $today);
?>
</body>
</html>