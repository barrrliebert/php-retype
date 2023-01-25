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
        $favcolor = "red";

        switch ($favcolor) {
            case 'red':
                echo "your favorite color is red";
                break;
            case 'blue':
                echo "your favorite color is blue";
                break;
            case 'green':
                echo "your favorite color is green";
                break;
            default:
                echo "your favorite color is neither red,blue,green";
                break;
        }
    ?>
</body>
</html>