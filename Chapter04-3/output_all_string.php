<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>ouput_all_string</h1>
<?php
$pattern = "/201[2-5](AX|FX)/iu";
$subject = "2011AX, 2012Fx, 2013FX, 2015ax, 2016Fx";
$result = preg_match_all($pattern, $subject, $matches);
if($result === false) {
    echo "오류 : ", preg_last_error();
} else if ($result == 0) {
    echo "일치한 값은 없습니다";
} else {
    echo "{$result}개 일치했습니다<br>";
    echo $matches[0]."<br>";
    echo implode(", ", $matches[0]);
}
?>
</body>
</html>