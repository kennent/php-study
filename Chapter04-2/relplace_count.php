<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>replace_count</h1>
<form action="" method="get">
    검색할 문자열 : <input type="text" name="searchStr" style="width:500px"><br>
    교체할 문자열 : <input type="text" name="changeStr" style="width:500px"><br>
    검색 대상 문자열 : <input type="text" name="str" style="width:500px"><br>
    <input type="submit">
</form>
<?php $count; ?>
<?= str_ireplace($_GET['searchStr'], $_GET['changeStr'], $_GET['str'], $count); ?>
<br>
<?= "바뀐 횟수 : ".$count; ?>
</body>
</html>