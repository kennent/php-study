<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>decode</h1>
<?php
$rawEncoded = "%ED%95%9C%EA%B8%80%20URL%20%EB%B3%80%ED%99%98";
$encoded = "%ED%95%9C%EA%B8%80+URL+%EB%B3%80%ED%99%98";
$rawPath = rawurldecode($rawEncoded);
$path = urldecode($encoded);
echo "http://test.com/{$rawPath}"."<br>";
echo "http://test.com/{$path}";
?>
</body>
</html>