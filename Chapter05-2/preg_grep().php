<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>preg_grep()</h1>
<?php
$nameList = ["Kennen", "Keyn", "Sol", "Zed"];
$pattern1 = "/[K|E]/u";
$pattern2 = "/[y|z]/iu";
$agreement = preg_grep($pattern1, $nameList);
$disagreement = preg_grep($pattern2, $nameList, PREG_GREP_INVERT);
echo "일치한 배열 추출 : ";
print_r($agreement);
echo "<br>일치하지 않는 배열 추출 : ";
print_r($disagreement);
?>
</body>
</html>