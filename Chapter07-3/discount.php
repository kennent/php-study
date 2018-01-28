<!DOCTYPE html>
<html>
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
    $errors = [];
    if (isset($_POST['couponCode'])) {
        $couponCode = $_POST['couponCode'];
    } else {
        $couponCode = "";
    }
    if (isset($_POST['goodsID'])) {
        $goodsID = $_POST['goodsID'];
    } else {
        $goodsID = "";
    }
?>
<?php
    require_once("saleData.php");
    $discount = getCouponRate($couponCode);
    $unitPrice = getPrice($goodsID);
    if (is_null($discount) || is_null($unitPrice)) {
        $err = '<div class="error">잘못된 조작이 있었습니다</div>';
        exit($err);
    }
?>
<?php
    if (isset($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
        if (!ctype_digit($quantity)) {
            $errors[] = "개수는 정수로 입력해 주세요";
        }
    } else {
        $errors[] = "개수가 미설정";
    }
?>
<?php
    if (count($errors) > 0) {
        echo '<ol class="error">';
        foreach ($errors as $value) {
            echo "<li>", $value, "</li>";
        }
        echo "</ol>";
    } else {
        $price = $unitPrice * $quantity;
        $discount_price = floor($price * $discount);
        $off_price = $price - $discount_price;
        $off_per = (1 - $discount) * 100;
        $unitPrice_fmt = number_format($unitPrice);
        $discount_price_fmt = number_format($discount_price);
        $off_price_fmt = number_format($off_price);
        echo "단가 : {$unitPrice_fmt}원, 개수 : {$quantity}개<br>";
        echo "금액 : {$discount_price_fmt}원<br>";
        echo "(할인 : -{$off_price_fmt}원, {$off_per}% OFF)<br>";
    }
?>
    <form method="POST" action="discountForm.php">
        <input type="hidden" name="quantity" value='<?="$quantity";?>'>
        <ul>
            <li><input type="submit" value="돌아가기"></li>
        </ul>
    </form>
</div>
</body>
</html>