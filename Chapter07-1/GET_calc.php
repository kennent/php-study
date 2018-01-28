<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter8</title>
    <style>ul { list-style: none; } input { margin: 5px 0; }</style>
</head>
<body>
<h1>GET_calc</h1>
<div>
<?php
    $unitPrice = $_GET["unitPrice"];
    $quantity = $_GET["quantity"];
    $price = $unitPrice * $quantity;
    $unitPrice = number_format($unitPrice);
    $price = number_format($price);
    echo "단가 {$unitPrice}원 x {$quantity}개는 {$price}원입니다";
?>
</div>
</body>
</html>