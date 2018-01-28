<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter2</title>
</head>
<body>
    <h1>echo와 print</h1>
    <?php
        $br = "<br>";
        $msg = "This is Msg!".$br;
        print($msg);
        echo "This is", "<hr>", "php!";
        print $br."mes"."sage".$br;
    ?>
</body>
</html>