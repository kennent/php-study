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
    if (isset($_POST['zip'])) {
        $zip = trim($_POST['zip']);
        $pattern = "/^\d{5}$/";
        if (!preg_match($pattern, $zip)) {
            $errors[] = "우편번호를 정확하게 입력해 주세요";
        }
    } else {
        $errors[] = "우편번호를 정확하게 입력해 주세요";
    }
?>
<?php
    if (count($errors) > 0) {
        echo '<ol class="error">';
        foreach ($errors as $value) {
            echo "<li>", $value, "</li>";
        }
        echo "</ol>";
    } else {
        echo "우편번호는 {$zip}입니다";
    }
?>
    <form method="POST" action="zipCheckForm.html">
        <ul>
            <li><input type="submit" value="돌아가기"></li>
        </ul>
    </form>
</div>
</body>
</html>