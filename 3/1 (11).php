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
        $cars = array(
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Toyota",17,18)
        );

        for ($row=0; $row < 3; $row++) { 
            echo "<p><b>Row Number $row</b></p>";
            echo "<ul>";
            for ($col=0; $col < 3; $col++) { 
                echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "<ul>";
        }
    ?>
</body>
</html>