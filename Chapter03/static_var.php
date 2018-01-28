<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
    <h1>정적 변수</h1>
        <?php
            function countUp () {
                static $count = 0;
                $count++;
                return $count;
            }
            $num = countUp();
            echo "{$num}번째<br>";
            $num = countUp();
            echo "{$num}번째";
        ?>
</body>
</html>