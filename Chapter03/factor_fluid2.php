<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
<h1>인수의 개수를 고정하지 않기</h1>
<?php
function f() {
    $allArgs = func_get_args();
    $total = array_sum($allArgs);
    $numArgs = func_num_args();
    if ($numArgs > 0 ) {
        $average = $total / $numArgs;
        $lastValue = func_get_arg($numArgs - 1);
    } else {
        $lastValue = $average = $total = "(데이터 없음)";
    }
    echo "합계 : {$total}<br>";
    echo "평균 : {$average}<br>";
    echo "마지막 점수 : {$lastValue}<br><br>";    
}

f(43, 52, 71, 89);
f(0, 100);
f();
?>
</body>
</html>