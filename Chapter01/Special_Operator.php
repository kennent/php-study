<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter2</title>
</head>
<body>
    <h1>특수 연산자 사용</h1>
        <?php
            var_dump(10 <=> 5);
            var_dump(5 <=> 5);
            var_dump(0 <=> 5);            
            $price = 250 * ($unitprice ?? 2);
            var_dump($unitprice);
            echo $price;
        ?>
</body>
</html>