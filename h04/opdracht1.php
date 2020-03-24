<!DOCTYPE html>
<html>
<head>
    <title>Fahrenheit</title>
</head>
<body>
<?php
//Functie fahrenheit
function fahrenheit() {
    $celcius = 5;
    return $celcius * 1.8 + 32;
}

//Functie deelbaar door 3
function deelbaardoor3() {
    $num = 9;
    if ($num % 3 == 0) {
        return true;
    } else {
        return false;
    }
}

//Functie string achterstevoren
function achterstevoren() {
    echo strrev("Deze string is achterstevoren!");
}

//Fahrenheit
echo fahrenheit();

echo '<br>';

//Delen door 3
if (deelbaardoor3(3)) echo "Dit is goed";
else echo "Dit is niet deelbaar door 3";

echo '<br>';

//String
echo achterstevoren();
?>
</body>
</html>
<h1></h1>
<a href="hoofdstuk4.php">Terug</a>
