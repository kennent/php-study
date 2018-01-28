<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>nature_sort</h1>
<?php
$data = ["Image7", "image12", "image1"];
natsort($data);
echo "natsort() 후의 \$data : ";
print_r($data);
natcasesort($data);
echo "<br>natcasesort() 후의 \$data : ";
print_r($data);
?>
</body>
</html>