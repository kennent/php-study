<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>Nowdoc 구문</h1>
<?php
$version = 7;
$str = <<< 'EOD'
진짜 이런게
문자열이 되는건가요<br>
네 됩니다<br>
현재 php{$version}을 사용중입니다
EOD;
echo $str;
?>
</body>
</html>