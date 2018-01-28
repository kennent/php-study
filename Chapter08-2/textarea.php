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
    if (isSet($_POST['note'])) {
        $note = $_POST['note'];
        $note = strip_tags($note);
        $note = mb_substr($note, 0, 150);
        $note = es($note);
    } else {
        $note = "";
    }
?>
<form method="POST" action='<?php echo es($_SERVER['PHP_SELF']);?>'>
<ul>
    <li><span>NOTE : </span>
        <textarea name="note" cols="25" rows="4" maxlength="150" placeholder="내용을 입력하세요"><?="$note";?>
        </textarea>
    </li>
    <li><input type="submit" value="송신한다"></li>
</ul>
</form>
<?php
    $length = mb_strlen($note);
    if ($length > 0) {
        echo "<hr>";
        $note_br = nl2br($note, false);
        echo $note_br;
    }
?>
</div>
</body>
</html>