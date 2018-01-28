<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
    <h1>변수의 범위</h1>
        <?php
            $num = 2;
            function price () {
                global $num;
                $price = 250 * $num;
                echo "{$price}원입니다";
            }
            echo "{$num}개에 ";
            price();
        ?>
</body>
</html>