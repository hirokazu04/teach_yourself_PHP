<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPの基本</title>

</head>
<body>

<?php
const TAX = 1.1;
$prise = 1000;
$sum = $prise * TAX;
print "税込み価格は{$sum}円です。";

?>

</body>
</html>
