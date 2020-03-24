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
    echo strrev("My name is Yoshikage Kira. I'm 33 years old. My house is in the northeast section of Morioh, where all the villas are, and I am not married.
I work as an employee for the Kame Yu department stores, and I get home every day by 8 PM at the latest. I don't smoke, but I occasionally drink.

I'm in bed by 11 PM, and make sure I get eight hours of sleep, no matter what.
After having a glass of warm milk and doing about twenty minutes of stretches before going to bed, I usually have no problems sleeping until morning. Just like a baby, I wake up without any fatigue or stress in the morning.
I was told there were no issues at my last check-up.

I'm trying to explain that I'm a person who wishes to live a very quiet life.
I take care not to trouble myself with any enemies, like winning and losing, that would cause me to lose sleep at night.
That is how I deal with society, and I know that is what brings me happiness. Although, if I were to fight I wouldn't lose to anyone.");
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
