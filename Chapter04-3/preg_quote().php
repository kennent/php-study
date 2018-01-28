<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>preg_quote().php</h1>
<?php
$escaped = preg_quote("http://sample.com/php/", "/");
$pattern1 = "/{$escaped}/u";
$pattern2 = "/http://sample/php//u";
echo $pattern1."<br>";
var_dump(preg_match($pattern1, "http://sample.com/php/"));
var_dump(preg_match($pattern1, "http://sample.com/node.js/"));
var_dump(preg_match($pattern2, "http://sample.com/php/"));
var_dump(preg_match($pattern2, "http://sample.com/node.js/"));
?>
</body>
</html>