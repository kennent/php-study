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
    if (isSet($_POST['name'])) $_SESSION['name'] = $_POST['name'];
    if (isSet($_POST['words'])) $_SESSION['words'] = $_POST['words'];
?>
<?php
    $errors = [];
    if (empty($_SESSION['name'])) $errors[] = "이름을 입력해 주세요";
    else $name = trim($_SESSION['name']);
    if (empty($_SESSION['words'])) $errors[] = "좋아하는 단어를 입력해 주세요";
    else $words = trim($_SESSION['words']);
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
            <input type="button" value="돌아가기" onclick="location.href='input.html'">
        </span>
    <?php else: ?>
        <span>
            이름 : <?=es($name);?><br>
            좋아하는 단어 : <?=es($words);?><br>
            <input type="button" value="돌아가기" onclick="location.href='input.html'">
            <input type="button" value="송신하기" onclick="location.href='thx.php'">
        </span>
    <?php endif;?>
</form>
</div>
</body>
</html>