<?php
    session_start();
    require_once("lib/util.php");
    if (isSet($_POST['name'])) $_SESSION['name'] = $_POST['name'];
    if (isSet($_POST['words'])) $_SESSION['words'] = $_POST['words'];
    if (empty($_SESSION['dogcat'])) $dogcat = [];
    else $dogcat = $_SESSION['dogcat'];
?>
<?php
    function checked($value, $question) {
        if (is_array($question)) $isChecked = in_array($value, $question);
        else $isChecked = ($value === $question);
        if ($isChecked) echo "checked";
        else echo "";
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
설문조사(2/2)<br>
<form method="POST" action="serv_conf.php">
    <ul>
        <li><span>강아지를 좋아하나요? 고양이를 좋아하나요?</span><br>
        <label><input type="checkbox" name="dogcat[]" value="강아지"
        <?=checked("강아지", $dogcat);?>>강아지가 좋아요</label><br>
        <label><input type="checkbox" name="dogcat[]" value="고양이"
        <?=checked("고양이", $dogcat);?>>고양이가 좋아요</label><br>
        </li>
        <input type="button" value="돌아가기" onclick="location.href='servey1.php'">
        <input type="submit" value="확인">
    </ul>
</form>
</div>
</body>
</html>