<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 4</title>
        <style>
            body {
                text-align: center;
            }
            .rood {
                border: red solid 5px;
            }
            .groen {
                border: green solid 5px;
            }
        </style>
</head>
<body>
<?php
    for ($i = 1; $i <= 9; $i++){
        if ($i % 2 == 0) {
            $class = "class = 'rood'";
        } else {
            $class = "class = 'groen'";
            }

        echo "<img ".$class. "src='img/aap".$i .".jpg'>";
    }
?>
<h1></h1>
<a href="hoofdstuk3.php">Terug</a>
</body>
</html>

