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
            $c = $a + $b; /* Assignment operator */
            echo "Addtion Operation Result: $c <br/>";
            $c += $a; /* c value was 42 + 20 = 62 */
            echo "Add AND Assigment Operation Result: $c <br/>";
            $c -= $a; /* c value was 42 + 20 + 42 = 104 */
            echo "Subtract AND Assignment Operation Result: $c <br/>";
            $c *= $a; /* c value was 104 - 42 = 62 */
            echo "Multiply AND Assignment Operation Result: $c <br/>";
            $c /= $a; /* c value was 62 * 42 = 2604 */
            echo "Division AND Assignment Operation Result: $c <br/>";
            $c %= $a; /* c value was 2604/42 = 62*/
            echo "Modulus AND Assignment Operation Result: $c <br/>";
            ?>
</body>

</html>