<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>number_format()</h1>
<?php
$money = 1234567890.0987654321;
$newMoney = number_format($money, 3);
echo $newMoney."원";
?>
</body>
</html>