<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
    <h1>인수의 개수를 고정하지 않는 함수</h1>
        <?php
            function sum (...$numbers) {
                $sum = 0;
                foreach ($numbers as $num) {
                    $sum += $num;
                }
                // var_dump($numbers);
                return $sum;
            }
            $result = sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            echo "1부터 10까지의 합 : {$result}";
        ?>
</body>
</html>