<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php chapter6</title>
</head>
<body>
<h1>array_searchSubstitution</h1>
<?php
$data = ["a", "B", "c"]; $ASS_data = ["AxA" => "a", "BvB" => "B", "CoC" => "c"];
$search = ["a", "b", "c"]; $ass_search = ["/a/u", "/b/u", "/c/u"];
$replacement = ["97", "98", "99"];
$result = str_replace($search, $replacement, $data);
$iresult = str_ireplace($search, $replacement, $data);
$ass_result = str_replace($search, $replacement, $ASS_data);
$ass_iresult = str_ireplace($ass_search, $replacement, $ASS_data);
echo "인덱스 배열 치환 결과 : ";
print_r($result);
echo "<br>인덱스 배열 i치환 결과 : ";
print_r($iresult);
echo "<br>str_replace를 이용한 연관 배열 치환 결과 : ";
print_r($ass_result);
echo "<br>str_ireplace를 이용한 연관 배열 i치환 결과 : ";
print_r($ass_iresult);
?>
</body>
</html>