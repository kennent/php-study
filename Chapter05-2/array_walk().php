<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_walk()</h1>
<ul>
<?php
$priceList = [23000, 12000, 40000];
$dollarwonn = ["symbol" => '$', "rate" => 1068.37];
$result = array_walk($priceList, function($value, $key, $rateData) {
    $rate = $rateData["rate"];
    if ($rate == 0) return;
    $price = $value / $rate;
    $exPrice = sprintf('%.02f', $price);
    echo "<li>", $rateData["symbol"], $exPrice, "</li>";
}, $dollarwonn);
?>
</ul>
<?php 
var_dump($result);
?>
</body>
</html>