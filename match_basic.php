<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4.1.9 値を返す新しいswitch match式</title>

</head>
<body>

<pre>

<?php

$rank = '甲';
$result = match($rank){
    '甲' => '大変良いです',
    '乙' => '良いです',
    '丙' => '頑張りましょう',
    default => '???'
};
print $result;

?>


</pre>


</body>
</html>
