<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
    <h1>인수가 생략된 함수</h1>
        <?php
            function airport ($seatClass='S', $personnel) {
                switch ($seatClass) {
                    case 'S':
                        $price = 100000 * $personnel;
                        break;
                    case 'A':
                        $price = 80000 * $personnel;
                        break;
                    case 'B':
                        $price = 50000 * $personnel;
                        break;
                    case 'C':
                        $price = 30000 * $personnel;
                        break;
                    default:
                        $price = 10000 * $personnel;
                        break;
                }
                return $price;
            }
            $price1 = airport(3);
            echo "\$price1 : {$price1}<br>";       
        ?>
</body>
</html>