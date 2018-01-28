<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
<h1>가변 변수</h1>
<?php
$unitPrice = 400;
$number = 3;
$danga = "unitPrice";
$gaesu = "number";
$price = $$danga * $$gaesu;
echo $price."원"; 
?>
</body>
</html>