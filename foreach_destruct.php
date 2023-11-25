<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4.2.7 </title>

</head>
<body>

<pre>

<?php

$books = [
    ['独習Python', 3000],
    ['独習Java', 2980],
    ['独習C# 新板', 3600],  
];

foreach($books as [$title, $price]){
    print "{$title} ({$price}円) <br />";
    
}



?>


</pre>


</body>
</html>
