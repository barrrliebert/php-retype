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
        /* First method to associate create array. */
        $salaries = array(
            "mohammad" => 2000,
            "qadir" => 1000,
            "zara" => 500
        );
        echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
        echo "Salary of qadir is ". $salaries['qadir']. "<br />";
        echo "Salary of zara is ". $salaries['zara']. "<br />";
        /* Second method to create array. */
        $salaries['mohammad'] = "high";
        $salaries['qadir'] = "medium";
        $salaries['zara'] = "low";
        echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
        echo "Salary of qadir is ". $salaries['qadir']. "<br />";
        echo "Salary of zara is ". $salaries['zara']. "<br />";
        ?>
    </body>
</html>