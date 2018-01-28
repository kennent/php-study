<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>ouput_string</h1>
<?php
$pattern = "/세.+왕/u";
$subject = <<< "names"
의왕
세종대왕
장영실
세계에서 제일 작은 왕
names;
$result = preg_match($pattern, $subject, $matches);
if($result === false) {
    echo "오류 : ", preg_last_error();
} else if ($result == 0) {
    echo "일치한 값은 없습니다";
} else {
    echo "[", $matches[0], "]이 발견되었습니다";
}
?>
</body>
</html>