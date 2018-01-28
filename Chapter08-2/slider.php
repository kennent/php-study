<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chapter9</title>
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
    $min = 1;
    $max = 5;
    if (isSet($_POST['spicy'])) {
        $spicy = $_POST['spicy'];
        $isSpicy = ctype_digit($spicy) && ($spicy >= $min) && ($spicy <= $max);
        if (!$isSpicy) {
            $errors[] = "매운맛 값에 오류가 있었습니다";
            $spicy = $min;
        }
    } else {
        $spicy = round(($min + $max) / 2);
        $isSpicy = true;
    }
?>
<form method="POST" action='<?php echo es($_SERVER['PHP_SELF']);?>'>
<ul>
    <li><span>매운맛 : </span>
        <input type="range" name="spicy" min="1" max="5" step="1" value="<?="$spicy";?>">
    </li>
    <li><input type="submit" value="송신한다"></li>
</ul>
</form>
<?php
    if ($isSpicy) {
        $spicyList = ["핵불닭볶음면급 매움", "불닭볶음면급 매움", "신라면급 매움", "매움", "안매움"];
        echo "<hr>";
        echo "매운맛의 정도는 {$spicy}.{$spicyList[$spicy-1]}입니다";
    }
?>
<?php
    if (count($errors) > 0) {
        echo "<hr>";
        echo '<span class="error">', implode("<br>", $errors), '</span>';
    }
?>
</div>
</body>
</html>