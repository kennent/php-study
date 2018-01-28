<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>arrayToString</h1>
<?php
$data = ["코코아", "커피", "녹차"];
$glue = " 한 잔, ";
$nameList = implode($glue, $data);
$nameList .= " 한 잔";
print_r($nameList);
?>
</body>
</html>