<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4.1.8 switch命令の判定方法</title>

</head>
<body>

<pre>

<?php
$exp ='3E2';
switch($exp){
    case 300:
        print '値は300';
        break;
  case '3E2':
    print '値は3E2';
    break;

}

?>


</pre>


</body>
</html>
