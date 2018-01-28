<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>ellipsis</h1>
<?php
$pattern = "/(010|011|070)(-?\d{4}){2}/u";
var_dump(preg_match($pattern, "01012345678"));
var_dump(preg_match($pattern, "011-1234-5678"));
var_dump(preg_match($pattern, "0701234-5678"));
var_dump(preg_match($pattern, "1012345678"));
?>
</body>
</html>