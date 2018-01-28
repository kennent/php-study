<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter7</title>
</head>
<body>
<h1>abstract</h1>
<?php
require_once("class/MyShop.php");
$myObj = new MyShop();
$myObj->selling(240, 3);
$myObj->selling(400, 1);
$myObj->getSales();
?>
</body>
</html>