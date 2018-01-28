<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>stringToArray</h1>
<?php
$data = "코코아,커피,녹차";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);
?>
</body>
</html>