<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter3</title>
</head>
<body>
    <h1>while</h1>
        <pre>
        <?php
            $numArray = array();
            while (count($numArray) < 5) {
                $num = mt_rand(1, 30);
                if (!in_array($num, $numArray)) {
                    array_push($numArray, $num);
                }
            }
            var_dump($numArray)
        ?>
        </pre>
</body>
</html>