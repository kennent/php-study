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
    if (isSet($_POST['sex'])) {
        $sexValue = ["남성", "여성"];
        $isSex = in_array($_POST['sex'], $sexValue);
        if ($isSex) {
            $sex = $_POST['sex'];
        } else {
            $sex = "error";
            $errors[] = "성별에 입력 오류가 있었습니다";
        }
    } else {
        $isSex = false;
        $sex = "남성";
    }
    if (isSet($_POST['marriage'])) {
        $marriageValue = ["독신", "기혼", "동거 중"];
        $isMarriage = in_array($_POST['marriage'], $marriageValue);
        if ($isMarriage) {
            $marriage = $_POST['marriage'];
        } else {
            $marriage = "error";
            $errors[] = "결혼에 입력 오류가 있습니다";
        }
    } else {
        $isMarriage = false;
        $marriage = "독신";
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
        <li><span>성별 : </span>
            <select name="sex">
                <option value="남성" <?php selected("남성", $sex); ?> >남성</option>
                <option value="여성" <?php selected("여성", $sex); ?> >여성</option>
            </select>
        </li>
        <li><span>결혼 : </span>
            <select name="marriage">
                <option value="독신" <?php selected("독신", $marriage); ?> >독신</option>
                <option value="기혼" <?php selected("기혼", $marriage); ?> >기혼</option>
                <option value="동거 중" <?php selected("동거 중", $marriage); ?> >동거 중</option>
            </select>
        </li>
        <li><input type="submit" value="송신한다"></li>
    </ul>
</form>
<?php
    $isSubmited = $isSex && $isMarriage;
    if ($isSubmited) {
        echo "<hr>";
        echo "당신은 {$sex}, {$marriage}입니다";
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