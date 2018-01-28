<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>mb_substr_count()</h1>
<form action="" method="get">
    <input type="text" name="str">
    <input type="submit">
</form>
<?php
$str = $_GET['str'];
function count_search($target, $searchStr) {
    $result = mb_substr_count($target, $searchStr);
    if ($result) {
        echo "[{$target}]에는 [{$searchStr}]라는 단어가 {$result}개 포함되어 있습니다"."<br>";
    } else {
        echo "[{$target}]에는 [{$searchStr}]라는 단어가 포함되어 있지 않습니다"."<br>";
    }
}
count_search('내가 그린 기린 그림은 잘 그린 기린 그림이고 니가 그린 기린 그림은 못 그린 기린 그림이다', '기린');
?>
</body>
</html>