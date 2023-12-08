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
    ['isbn' => '978-4-7981-6364-2', 'title' => '独習Python'],
    ['isbn' => '978-4-7981-5112-0', 'title' => '独習Java 新版'],
    ['isbn' => '978-4-7981-5382-7', 'title' => '独習C# 新版']
];


$isbn = [];
$title = [];

foreach($books as $book){
    ['isbn' => $isbn[] ] = $book;
    ['title' => $title[] ] = $book;
}

print_r($isbn);
print_r($title);


?>


</pre>


</body>
</html>
