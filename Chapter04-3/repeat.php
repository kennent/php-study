<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>repeat</h1>
<?php
var_dump(preg_match("/[0-9]{3}-[0-9]{2}/u", "123-45"));
var_dump(preg_match("/[0-9]{3}-[0-9]{2}/u", "000-88"));
var_dump(preg_match("/[0-9]{3}-[0-9]{2}/u", "12-345"));
var_dump(preg_match("/[0-9]{3}-[0-9]{2}/u", "aa-bbb"));
?>
</body>
</html>