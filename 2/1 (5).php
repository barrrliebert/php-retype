<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        $x=25; // global scope
        $y=50; // global scope
        function myTest()
        {
        global $x,$y;
        $y=$x+$y;
        }
        myTest(); // run function
        echo $y; // output the new value for variable $y
        ?>
    </body>
</html>