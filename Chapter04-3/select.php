<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>select</h1>
<?php
var_dump(preg_match("/서울|제주/u", "서울대학교"));
var_dump(preg_match("/서울|제주/u", "서울시립대학교"));
var_dump(preg_match("/서울|제주/u", "제주대학교"));
var_dump(preg_match("/서울|제주/u", "한국기술과학연구원"));
?>
</body>
</html>