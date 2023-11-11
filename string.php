<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>練習問題 2.2</title>

</head>
<body>

<?php
$title ='サーバーサイド技術の学び舎 - WINGS';
$data1 = "サポートサイト\t「{$title}」へ<br>";
$data2 = 'サポートサイト\t「{$title}」へ<br>';
print $data1;
print $data2;

print "実行中のファイル名 = {__FILE__}<br>";
print "実行中の行番号 = {__LINE__}<br>";


?>

</body>
</html>
