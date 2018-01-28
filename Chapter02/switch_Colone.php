<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter3</title>
</head>
<body>
    <h1>switch문의 콜론: 사용</h1>
        <?php
            $color = "blue";
        ?>
        <?php switch($color):
            case 'red' :
                echo "<p>강렬하네요!</p>";
                break;
            case 'blue' :
                echo "<p>서늘하네요-</p>";
                break;
            case 'yellow' :
                echo "<p>나른하네요~</p>";
                break;
            default :
                echo "{$color}는 그다지 느낌이 없네요";
            endswitch;
        ?>
</body>
</html>