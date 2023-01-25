<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retype 13 fch</title>
</head>
<body>
    <?php 
        $age = array("peter"=>"35", "Ben"=>"37", "joe"=>"43");

        foreach ($age as $x => $value) {
            echo "key = ".$x.". Value =".$value;
            echo "<br>";
        }
    ?>
</body>
</html>