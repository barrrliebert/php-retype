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
            $a = 42;
            $b = 20;
            $c = $a + $b;
            echo "Addtion Operation Result: $c <br/>";
            $c = $a - $b;
            echo "Substraction Operation Result: $c <br/>";
            $c = $a * $b;
            echo "Multiplication Operation Result: $c <br/>";
            $c = $a / $b;
            echo "Division Operation Result: $c <br/>";
            $c = $a % $b;
            echo "Modulus Operation Result: $c <br/>";
            $c = $a++;
            echo "Increment Operation Result: $c <br/>";
            $c = $a--;
            echo "Decrement Operation Result: $c <br/>";
            ?>
        </body>
</html>
