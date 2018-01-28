<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>mb_stristr()</h1>
<form action="" method="get">
    <input type="text" name="str" style="width:500px">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function http_cut($str) {
    $result = mb_stristr($str, 'http://');
    if ($result === false) echo "(not found)";
    else echo strtolower($result);
}
http_cut($str);
?>
</body>
</html>