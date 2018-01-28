<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>no_char_class</h1>
<?php
var_dump(preg_match("/빨간색/u", "빨간색"));
var_dump(preg_match("/빨간색/u", "초록색"));
var_dump(preg_match("/빨간색/u", "파란색"));
?>
</body>
</html>