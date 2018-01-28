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
    if (isSet($_POST['meal'])) {
        $meals = ["아침식사", "저녁식사"];
        $diffValue = array_diff($_POST['meal'], $meals);
        if (count($diffValue) == 0) {
            $mealSelected = $_POST['meal'];
        } else {
            $mealSelected = [];
            $errors[] = "식사에 입력 오류가 있었습니다";
        }
    } else {
        $mealSelected = [];
    }
    if (isSet($_POST['food'])) {
        $foods = ["스시", "돈카츠", "우동"];
        $diffValue = array_diff($_POST['food'], $foods);
        if (count($diffValue) == 0) {
            $foodSelected = $_POST['food'];
        } else {
            $foodSelected = [];
            $errors[] = "음식에 입력 오류가 있습니다";
        }
    } else {
        $foodSelected = [];
    }
?>
<?php
    function selected($value, $question) {
        if (is_array($question)) {
            $isSelected = in_array($value, $question);
        } else {
            $isSelected = ($value === $question);
        }
        if ($isSelected) {
            echo "selected";
        } else {
            echo "";
        }
    }
?>
<form method="POST" action='<?php echo es($_SERVER['PHP_SELF']);?>'>
<ul>
    <li><span>식사 : </span>
        <select name="meal[]" size="1" style="width:100px">
            <option value="아침식사" <?php selected("아침식사", $mealSelected); ?> >아침식사</option>
            <option value="저녁식사" <?php selected("저녁식사", $mealSelected); ?> >저녁식사</option>
        </select>
    </li>
    <li><span>음식 : </span>
        <select name="food[]" size="2" multiple style="width:100px">
            <option value="스시" <?php selected("스시", $foodSelected); ?> >스시</option>
            <option value="돈카츠" <?php selected("돈카츠", $foodSelected); ?> >돈카츠</option>
            <option value="우동" <?php selected("우동", $foodSelected); ?> >우동</option>
        </select>
    </li>
    <li><input type="submit" value="송신한다"></li>
</ul>
</form>
<?php
    $isMeal = count($mealSelected) > 0;
    $isFood = count($foodSelected) > 0;
    $isSelected = $isMeal || $isFood;
    echo "<hr>";
    if ($isSelected) {
        if ($isMeal) echo "식사 : ", implode("와 ", $mealSelected), "<br>";
        if ($isFood) echo "음식 : ", implode("와 ", $foodSelected), "<br>";
    } else echo "선택된 것이 없습니다";
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