<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>sprintf()</h1>
<?php
$year = 2018;
$month = 1;
$day = 5;
$today = sprintf('%04d-%02d-%02d', $year, $month, $day);
echo "오늘의 날짜는 {$today}입니다";
?>
</body>
</html>