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
?>
<?php
    if (isset($_POST['sum'])) {
        $sum = $_POST['sum'];
        if (!ctype_digit($sum)) {
            $errors[] = "합계 금액을 정수로 입력해주세요";
        }
    } else {
        $errors[] = "합계 금액을 설정하지 않았습니다";
    }
    if (isset($_POST['headcount'])) {
        $headcount = $_POST['headcount'];
        if (!ctype_digit($headcount)) {
            $errors[] = "인원수를 정수로 입력해주세요";
        }
            else if ($headcount == 0) {
            $errors[] = "0명으로는 나눌 수 없습니다";
        }
    } else {
        $errors[] = "인원수를 설정하지 않았습니다";
    }
?>
<?php
    if (count($errors) > 0) {
        echo '<ol class="error">';
        foreach ($errors as $value) {
            echo "<li>", $value, "</li>";
        }
        echo "</ol>";
?>
    <form method="POST" action="dutchtreatForm.html">
        <ul>
            <li><input type="submit" value="돌아가기"></li>
        </ul>
    </form>
<?php
    } else {
        $rest = $sum % $headcount;
        $price = ($sum - $rest) / $headcount;
        $sum_fmt = number_format($sum);
        $price_fmt = number_format($price);
        echo "{$sum_fmt}원을 {$headcount}명이 각자 부담합니다<br>";
        echo "1명당 {$price_fmt}원을 부담하면 부족한 금액은 {$rest}원입니다";
    }
?>
</div>
</body>
</html>