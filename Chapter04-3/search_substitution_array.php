<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>search_substitution_array</h1>
<?php
$pattern = ["/수업일/u", "/수업시간/u"];
$replacement = ["금요일", "오후 2:30"];
$subject = "다음 시간은 수업일 수업시간입니다";
$result = preg_replace($pattern, $replacement, $subject);
echo $result;
?>
</body>
</html>