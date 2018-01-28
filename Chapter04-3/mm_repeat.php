<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>mm_repeat</h1>
<?php
var_dump(preg_match("/[a-z]{4,8}]/u", "run"));
var_dump(preg_match("/[a-z]{4,8}/u", "time"));
var_dump(preg_match("/[a-z]{4,8}/u", "HTML"));
var_dump(preg_match("/[a-z]{4,8}/u", "password"));
?>
</body>
</html>