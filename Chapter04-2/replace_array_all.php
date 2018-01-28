<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>replace_array_all</h1>
<form action="" method="get">
    교체할 문자열 : <input type="text" name="changeStr" style="width:500px"><br>
    검색 대상 문자열 : <input type="text" name="str" style="width:500px"><br>
    <input type="submit">
</form>
<?php $count; $search = array('p', 'e'); ?>
<?= str_ireplace($search, $_GET['changeStr'], $_GET['str'], $count); ?>
<br>
<?= "바뀐 횟수 : ".$count; ?>
</body>
</html>