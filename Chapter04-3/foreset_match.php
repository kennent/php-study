<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>foreset_match</h1>
<?php
var_dump(preg_match("/^김/u", "김향기"));
var_dump(preg_match("/^김/u", "김자홍"));
var_dump(preg_match("/^김/u", "하정우"));
var_dump(preg_match("/^김/u", "강림, 한원맥"));
?>
</body>
</html>