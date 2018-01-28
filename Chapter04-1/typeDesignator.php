<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>type designator</h1>
<?php
$numValue = 15.1;
$eValue = 123.201801052223;
$e2Value = 123184262376453.128467456345;
printf("%%%% = %%<br>");
printf("%%b = %b<br>", $numValue);
printf("%%c = %c<br>", 97);
printf("%%d = %d<br>", $numValue);
printf("%%e = %.3e<br>", $e2Value);
printf("%%E = %.3E<br>", $eValue);
printf("%%f = %.3f<br>", $numValue);
printf("%%F = %.3F<br>", $eValue);
printf("%%g = %g<br>", $e2Value);
printf("%%G = %G<br>", $eValue);
printf("%%o = %o<br>", $numValue);
printf("%%s = %s<br>", 'kennen');
printf("error : %%u = %u<br>", -1);
printf("%%u = %u<br>", $numValue);
printf("%%x = %x<br>", $numValue);
printf("%%X = %X<br>", $numValue);
?>
</body>
</html>