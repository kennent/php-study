<?php
    session_start();
    require_once("lib/util.php");
    if (empty($_SESSION['name'])) $name = "";
    else $name = $_SESSION['name'];
    if (empty($_SESSION['words'])) $words = "";
    else $words = $_SESSION['words'];
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
설문조사(1/2)<br>
<form method="POST" action="servey2.php">
    <ul>
        <li><label>이름 : 
            <input type="text" name="name" placeholder="별명을 써도 됩니다"
            value="<?=es($name);?>">
        </label></li>
        <li><label>좋아하는 단어 : 
            <input type="text" name="words" value="<?=es($words);?>">
        </label></li>
        <li><input type="submit" value="다음으로"></li>
    </ul>
</form>
</div>
</body>
</html>