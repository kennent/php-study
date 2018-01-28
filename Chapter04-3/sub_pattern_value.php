<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>sub_pattern_value</h1>
<?php
$pattern = "/2013([A-F])-(..)/i";
$subject = "2012A-sx, 2013F-fx, 2013G-fx, 2013A-dx, 2015a-sx";
$result = preg_match_all($pattern, $subject, $matches);
if($result === false) {
    echo "오류 : ", preg_last_error();
} else if ($result == 0) {
    echo "일치한 값은 없습니다";
} else {
    $all = implode(", ", $matches[0]);
    $model = implode(", ", $matches[1]);
    $type = implode(", ", $matches[2]);
    echo "발견한 형식 : {$all}<br>";
    echo "모델 : {$model}<br>";
    echo "타입 : {$type}";
}
?>
</body>
</html>