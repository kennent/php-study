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
    $isError = false;
    if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
        if ($name === "") {
            $isError = true;
        }
    } else {
        $isError = true;
    }
?>
<?php if ($isError): ?>
    <span class="error">이름을 입력해 주세요</span>
    <form method="POST" action="nameCheckForm.html">
        <input type="submit" value="돌아가기">
    </form>
<?php else: ?>
    <span>
    안녕하세요, <?="$name";?>씨
    </span>
<?php endif;?>
</div>
</body>
</html>