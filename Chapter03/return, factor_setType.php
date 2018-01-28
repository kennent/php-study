<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter4</title>
</head>
<body>
    <h1>반환 값과 인자의 형을 지정하는 함수</h1>
        <?php
            function rDouble ($var):int {
                return $var * 2;
            }
            function pDouble (int $var) {
                return $var * 2;
            }
            $rResult = rDouble(10.8);
            $pResult = pDouble(10.8);
            echo "\$rResult : $rResult<br>";
            echo "\$pResult : $pResult";
        ?>
</body>
</html>