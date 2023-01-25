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
        $marks = array(
            "mohammad" => array
            (
                "physics" => 35,
                "maths" => 30,
                "chemistry" => 39
            ),
            "qadir" => array
            (
                "physics" => 30,
                "maths" => 32,
                "chemistry" => 29
            ),
            "zara" => array
            (
                "physics" => 31,
                "maths" => 22,
                "chemistry" => 39
            )
            );
            /* Accessing multi-dimensional array values */
            echo "Marks for mohammad in physics : " ;
            echo $marks['mohammad']['physics'] . "<br />";
            echo "Marks for qadir in maths : ";
            echo $marks['qadir']['maths'] . "<br />";
            echo "Marks for zara in chemistry : " ;
            echo $marks['zara']['chemistry'] . "<br />";
            ?>
    </body>
</html>