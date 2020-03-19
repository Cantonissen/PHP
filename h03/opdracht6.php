<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Zwemmen</title>
</head>
<body>
<?php
$spartelkuikens = 25;
$waterbuffels = 32;
$plons = 11;
$bommetje = 23;
$zwemmers = array($spartelkuikens, $waterbuffels, $plons, $bommetje);
$value = 5;
$splitnum = 5;
$plaatjes = count($zwemmers) % $splitnum;

foreach ($zwemmers as &$value){
    for($i = 0; $i < ($value - $value % $splitnum) / $splitnum; $i++) {
        echo "<img src='img/zwem.png'>";
    }
}
?>
</body>
</html>
<h1></h1>
<a href="hoofdstuk3.php">Terug</a>