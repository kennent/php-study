<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter5</title>
</head>
<body>
<h1>str - upper_lower</h1>
<?php
$low = "oh my railgun";
$up = "OH MY RAILGUN";
echo "\$low - strtoupper : ".strtoupper($low)."<br>";
echo "\$up - strtolower : ".strtolower($up)."<br>";
echo "\$low - ucfirst : ".ucfirst($low)."<br>";
echo "\$low - ucwords : ".ucwords($low)."<br>";
echo "\$up - ucwords + strtolower : ".ucwords(strtolower($up))."<br>";
?>
</body>
</html>