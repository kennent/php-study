<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>replace_array_each</h1>
<form action="" method="get">
    검색 대상 문자열 : <input type="text" name="str" style="width:500px"><br>
    <input type="submit">
</form>
<?php $count; $search = array('p', 'e'); $change = ['?', '!']; ?>
<?= str_ireplace($search, $change, $_GET['str'], $count); ?>
<br>
<?= "바뀐 횟수 : ".$count; ?>
</body>
</html>