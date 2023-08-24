<!DOCTYPE>
<html>
<body>
    <?php
$x = 8998;
var_dump(is_numeric($x));

$x = "8998";
var_dump(is_numeric($x));

$x = "89.88" + 100;
var_dump(is_numeric($x));

$x = "hello";
var_dump(is_numeric($x));
?>

</html>
</html>