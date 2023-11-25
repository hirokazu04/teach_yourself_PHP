<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4.2.5 </title>

</head>
<body>

<pre>

<?php

$data = ['高江', '掛谷', '日尾', '薄井', '和田'];
print_r($data);


foreach($data as &$value){
    $value = 'New' . $value;
    
}
print_r($data);



?>


</pre>


</body>
</html>
