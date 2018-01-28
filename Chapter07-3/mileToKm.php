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
    if (isSet($_POST['mile'])) {
        $isNum = is_numeric($_POST['mile']);
        if ($isNum) {
            $mile = $_POST['mile'];
            $error = "";
        } else {
            $mile = "";
            $error = '<span class="error">수치를 입력해 주세요</span>';
        }
    } else {
        $isNum = false;
        $mile = "";
        $error = "";
    }
?>
    <form method="POST" action='<?php echo es($_SERVER['PHP_SELF']);?>'>
        <ul>
            <li>
                <label>마일을 km로 변환 :
                <input type="text" name="mile" value='<?="$mile";?>'>
                </label>
                <?="$error";?>
            </li>
            <li><input type="submit" value="계산한다"></li>
        </ul>
    </form>
<?php
    if ($isNum) {
        echo "<hr>";
        $km = $mile * 1.609344;
        echo "{$mile}마일은 {$km}km입니다";
    }
?>
</div>
</body>
</html>