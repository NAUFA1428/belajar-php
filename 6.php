<!DOCTYPE>
<html>
<body>
    <?php
    function mytest() {
        static $x = 9;
        echo $x;
        $x++;
    }
mytest();//menjalankan fungsi mytest
mytest();//sama
mytest();//sama
?>

</html>
</html>