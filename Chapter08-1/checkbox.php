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
            $mealChecked = $_POST['meal'];
        } else {
            $mealChecked = [];
            $errors[] = "식사에 입력 오류가 있었습니다";
        }
    } else {
        $mealChecked = [];
    }
    if (isSet($_POST['food'])) {
        $foods = ["스시", "돈카츠", "우동"];
        $diffValue = array_diff($_POST['food'], $foods);
        if (count($diffValue) == 0) {
            $foodChecked = $_POST['food'];
        } else {
            $foodChecked = [];
            $errors[] = "음식에 입력 오류가 있습니다";
        }
    } else {
        $foodChecked = [];
    }
?>
<?php
    function checked($value, $question) {
        if (is_array($question)) {
            $isChecked = in_array($value, $question);
        } else {
            $isChecked = ($value === $question);
        }
        if ($isChecked) {
            echo "checked";
        } else {
            echo "";
        }
    }
?>
<form method="POST" action='<?php echo es($_SERVER['PHP_SELF']);?>'>
    <ul>
        <li><span>식사 : </span>
            <label><input type="checkbox" name="meal[]" value="아침식사" <?php
                checked("아침식사", $mealChecked);?> >아침식사</label>
            <label><input type="checkbox" name="meal[]" value="저녁식사" <?php
                checked("저녁식사", $mealChecked);?> >저녁식사</label>
        </li>
        <li><span>음식 : </span>
            <label><input type="checkbox" name="food[]" value="스시" <?php
                checked("스시", $foodChecked);?> >스시</label>
            <label><input type="checkbox" name="food[]" value="돈카츠" <?php
                checked("돈카츠", $foodChecked);?> >돈카츠</label>
            <label><input type="checkbox" name="food[]" value="우동" <?php
                checked("우동", $foodChecked);?> >우동</label>
        </li>
        <li><input type="submit" value="송신한다"></li>
    </ul>
</form>
<?php
    $isMeal = count($mealChecked) > 0;
    $isFood = count($foodChecked) > 0;
    $isSelected = $isMeal || $isFood;
    echo "<hr>";
    if ($isSelected) {
        if ($isMeal) echo "식사 : ", implode("와 ", $mealChecked), "<br>";
        if ($isFood) echo "음식 : ", implode("와 ", $foodChecked), "<br>";
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