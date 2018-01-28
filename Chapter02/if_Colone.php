<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php chapter3</title>
</head>
<body>
    <h1>if문의 콜론: 사용</h1>
        <?php
            $score = 70;
        ?>
        <?php if ($score >= 80): ?>
            멋져요!
        <?php elseif ($score >= 60): ?>
            분발하세요!
        <?php else: ?>
            답이 없네요~
        <?php endif;?>
</body>
</html>