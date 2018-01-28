<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_map1</h1>
<?php
function exchange($value) {
    global $rate;
    if ($rate == 0) $rate = 1;
    $exPrice = $value / $rate;
    $exPrice = '￥'.round($exPrice*100)/100;
    return $exPrice;
}
$priceWon = [23000, 12000, 40000];
$rate = 9.58;
$priceYen = array_map("exchange", $priceWon);
print_r($priceYen);
?>
</body>
</html>