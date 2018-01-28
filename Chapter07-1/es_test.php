<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter8</title>
    <style>ul { list-style: none; } input { margin: 5px 0; }</style>
</head>
<body>
<h1>es_test</h1>
<?php
require_once("es.php");
$code = "<h2>테스트1</h2>";
$arr = ["a" => "<p>빨강</p>", "b" => "<script>alert('hello')</scirpt>"];
echo "\$code : ", es($code), "<br>";
echo "\$arr : ";
print_r(es($arr));
?>
</body>
</html>