<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter2</title>
</head>
<body>
    <h1>var_dump() + 사용</h1>
    <pre>
        <?php
            $colors = array("red", "blue", "green");
            $now = new DateTime();
            $point = 45;
            $isPass = ($point > 80);
            $userName;
            var_dump($msg);
            var_dump($colors);
            var_dump($now);
            var_dump($point);
            var_dump($isPass);
            var_dump($userName);
            print_r($point);
            print_r($isPass);
            print_r($userName);
        ?>
    </pre>
</body>
</html>