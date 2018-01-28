<?php 
    require_once("lib/util.php");
    session_start();
?>
<?php
    if (!cken($_POST)) {
        $encoding = mb_internal_encoding();
        $err = "Encoding Error! The expected encoding is $encoding";
        exit($err);
    }
    $_POST = es($_POST);
?>
<?php
    $errors = [];
    if (empty($_SESSION['name'])) $errors[] = "이름을 입력해 주세요";
    else $name = trim($_SESSION['name']);
    if (empty($_SESSION['words'])) $errors[] = "좋아하는 단어를 입력해 주세요";
    else $words = trim($_SESSION['words']);
?>
<?php
    if (isSet($_POST['dogcat'])) {
        $dogcat = $_POST['dogcat'];
        $_SESSION['dogcat'] = $dogcat;
        $diffValue = array_diff($dogcat, ["강아지", "고양이"]);
        if (count($diffValue) > 0)
            $errors[] = "강아지와 고양이의 선호도 조사 응답에 오류가 있었습니다";
        $dogcatString = implode("를 좋아하고, ", $dogcat)."를 좋아합니다";
    } else {
        $dogcatString = "모두 좋아하지 않습니다";
        $_SESSION['dogcat'] = [];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<form>
    <?php if (count($errors) > 0): ?>
        <span class="error"><?=implode('<br>', $errors); ?></span><br>
        <span>
            <input type="button" value="돌아가기" onclick="location.href='servey1.php'">
        </span>
    <?php else: ?>
        <span>
            이름 : <?=es($name);?><br>
            좋아하는 단어 : <?=es($words);?><br>
            강아지와 고양이 좋아하나요? : <?=es($dogcatString);?><br>
            <input type="button" value="돌아가기" onclick="location.href='servey1.php'">
            <input type="button" value="송신하기" onclick="location.href='serv_thx.php'">
        </span>
    <?php endif;?>
</form>
</div>
</body>
</html>