<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
    <h1>거리와 각도를 가지고 tan()함수를 이용하여 높이 구하기</h1>
        <img src="./tan().png">
        <?php
            $distance = 15;
            $angle = 40 * pi() / 180;
            $height = $distance * tan($angle);
            $height = round($height * 10) / 10;

            echo "나무 높이는 {$height}m입니다";
        ?>
</body>
</html>