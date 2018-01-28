<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>hyphen</h1>
<?php
var_dump(preg_match("/[A-F]-[0-9]-[0-9a-zA-Z]/u", "A-5-5"));
var_dump(preg_match("/[A-F]-[0-9]-[0-9a-zA-Z]/u", "CC-5-5"));
var_dump(preg_match("/[A-F]-[0-9]-[0-9a-zA-Z]/u", "C-55-5"));
var_dump(preg_match("/[A-F]-[0-9]-[0-9a-zA-Z]/u", "C-5-55"));
var_dump(preg_match("/[A-F]-[0-9]-[0-9a-zA-Z]/u", "F-5-S"));
var_dump(preg_match("/[A-F]-[0-9]-[0-9a-zA-Z]/u", "S-5-S"));
?>
</body>
</html>