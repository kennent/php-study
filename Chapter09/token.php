<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
<?php
    $bytes = openssl_random_pseudo_bytes(16);
    $token = bin2hex($bytes);
    echo $token;
?>
</body>
</html>