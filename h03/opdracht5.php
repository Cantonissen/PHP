<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Busreis</title>
</head>
<body>
<?php
$leeftijd = 2;
$bedrag = 10;
if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 3) {
    $bedrag = $bedrag = 0;
}
echo $bedrag;
?>
</body>
</html>
<h1></h1>
<a href="hoofdstuk3.php">Terug</a>