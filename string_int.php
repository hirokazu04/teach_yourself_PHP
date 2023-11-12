<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>2.5.2 明示的な変換(キャスト)</title>

</head>
<body>

<pre>

<?php
var_dump( (int)'0b11'  );
var_dump( (int)'0777'   );
var_dump( (int)'0xFF'  );
var_dump( (bindec('0b11')));
var_dump( (octdec('0777')));
var_dump( (hexdec('0xFF')));
var_dump( (int)'1E4'  );
var_dump( (float)'1E4');


?>


</pre>


</body>
</html>
