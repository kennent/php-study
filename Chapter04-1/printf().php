<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>printf()</h1>
<?php
$sleepValue = 2.4324;
$value = 12345.54321;
$format = '내가 잘 수 있는 확률 %.1f';
echo "형식 지정자 없이 출력 : $sleepValue <br>";
printf($format, $value);
printf("<br><br>부호 지정자 : %+d<br>", $value, $value);
printf("채움(패딩) 지정자(0으로 채움) : %04d<br>", $value);
printf("채움(패딩) 지정자(x로 채움) : %'x4d<br>", $value);
printf("정렬(얼라인먼트) 지정자(왼쪽 정렬) : %'#-6d<br>", $value);
printf("정렬(얼라인먼트) 지정자(오른쪽 정렬) : %'#6d<br>", $value);
printf("너비 지정자 : %06d<br>", $value);
printf("정밀도 지정자(07.2) : %07.2f<br>", $value);
printf("정밀도 지정자(010.3) : %010.3f<br>", $value);
printf("지정자 순위 : %'#-+10.1f", $value);
?>
</body>
</html>