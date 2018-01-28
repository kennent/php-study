<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>encode</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
$rawPath = rawurlencode($str);
$path = urlencode($str);
echo "http://test.com/{$rawPath}"."<br>";
echo "http://test.com/{$path}";
?>
</body>
</html>