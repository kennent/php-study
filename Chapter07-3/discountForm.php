<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>Chapter8</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    require_once("lib/util.php");
    if (!cken($_POST)) {
        $encoding = mb_internal_encoding();
        $err = "Encoding Error! The expected encoding is $encoding";
        exit($err);
    }
    $_POST = es($_POST);
?>
<?php
    if (isset($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
    } else {
        $quantity = "";
    }
?>
<?php
    require_once("saleData.php");
    $couponCode = "ha45as";
    $goodsID = "ax102";
    $discount = getCouponRate($couponCode);
    $unitPrice = getPrice($goodsID);
    if (is_null($discount) || is_null($unitPrice)) {
        $err = '<div class="error">잘못된 조작이 있었습니다</div>';
        exit(err);
    }
    $off = (1 - $discount) * 100;
    if ($discount > 0) {
        echo "<h2>이 페이지에서 구입하면 {$off}% OFF가 됩니다!</h2>";
    }
    $unitPrice_fmt = number_format($unitPrice);
?>
    <form method="POST" action="discount.php">
        <input type="hidden" name="couponCode" value='<?="$couponCode";?>'>
        <input type="hidden" name="goodsID" value='<?="$goodsID";?>'>
        <ul>
            <li><label>단가 : <?="$unitPrice_fmt";?>원</labe></li>
            <li><label>개수 : <input type="number" name="quantity" value='<?="$quantity";?>'></label></li>
            <li><input type="submit" value="계산한다"></li>
        </ul>
    </form>
</div>
</body>
</html>