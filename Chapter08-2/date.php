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
    if (!empty($_POST['theDate'])) {
        $postDate = trim($_POST["theDate"]);
        $pattern = preg_match("/^\d{4}-\d{1,2}-\d{1,2}$/", $postDate);
        if ($pattern) {
            $dateArray = explode("-", $postDate);
            $theYear = $dateArray[0];
            $theMonth = $dateArray[1];
            $theDay = $dateArray[2];
            $isDate = checkdate($theMonth, $theDay, $theYear);
            if ($isDate) $dateObj = new DateTime($postDate);
            else $errors[] = "올바른 날짜 형식이 아닙니다";
        } else {
            $today = new DateTime();
            $today1 = $today->format("Y-n-j");
            $today2 = $today->format("Y/n/j");
            $errors[] = "날짜는 다음의 형식 중 하나의 형식을 지켜서 입력해 주세요<br>{$today1} 또는 {$today2}";
            $isDate = false;
        }
    } else {
        $isDate = false;
        $postDate = "";
    }
?>
<form method="POST" action='<?php echo es($_SERVER['PHP_SELF']);?>'>
<ul>
    <li><span>날짜를 선택한다 : </span>
        <input type="date" name="theDate" value=<?=$postDate;?>>
    </li>
    <li><input type="submit" value="송신한다"></li>
</ul>
</form>
<?php
    if ($isDate) {
        $date = $dateObj->format("Y년m월d일");
        $w = (int)$dateObj->format("w");
        $week = ["일", "월", "화", "수", "목", "금", "토"];
        $day = $week[$w];
        echo "<hr>";
        echo "{$date}는 {$day}요일입니다";
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