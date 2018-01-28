<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>mb_strlen()</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$strNum = mb_strlen($_GET['str']);
echo "입력한 문자열의 길이는 ".$strNum."입니다";
?>
</body>
</html>