<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>히어 다큐먼트 구문</h1>
<?php
$version = 7;
$str = <<< "EOL"
진짜 이런게
문자열이 되는건가요<br>
네 됩니다<br>
현재 php{$version}을 사용중입니다
EOL;
echo $str;
?>
</body>
</html>