<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter8</title>
    <style>ul { list-style: none; } input { margin: 5px 0; }</style>
</head>
<body>
<h1>cken_test</h1>
<?php
require_once("cken.php");
$utf8_string = "안녕하세요 ";
$utf8_string = mb_convert_encoding($utf8_string, 'UTF-8');
$encoding = mb_internal_encoding("UTF-8");
if(cken([$utf8_string])) {
    echo "배열 값은 $encoding 입니다";
} else {
    echo "배열 값은 $encoding 이 아닙니다";
}
?>
</body>
</html>