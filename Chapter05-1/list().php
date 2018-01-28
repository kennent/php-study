<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>list()</h1>
<?php
$data = ['케넹', '18쨜', '여고생'];
list($name, $age, $job) = $data;
echo "이름 : ".$name."<br>";
echo "나이 : ".$age."<br>";
echo "직업 : ".$job."<br>";
?>
</body>
</html>