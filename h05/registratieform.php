<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<style>
    .error {
        color: red;
    }
</style>
<?php
//Variabelen
$naamError = $emailError = $adressError = $wachtwoordError = "";
$naam = $email = $adres = $wachtwoord = "";

//Testform
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_GET["naam"])) {
        $naamError = "Naam is verplicht";
    } else {
        $naam = test_input($_GET["naam"]);
    }

    if (empty($_GET["adres"])) {
        $adressError = "E-Mail is verplicht";
    } else {
        $adres = test_input($_GET["adres"]);
    }

    if (empty($_GET["email"])) {
        $emailError = "";
    } else {
        $email = test_input($_GET["email"]);
    }

    if (empty($_GET["wachtwoord"])) {
        $wachtwoordError = "";
    } else {
        $wachtwoord = test_input($_GET["wachtwoord"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Registratieformulier</h2>
<p><span class="error">* Is een verplicht veld</span></p>
<form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Naam <input type="text" name="naam" value="<?php echo $naam ?>">
    <span class="error">* <?php echo $naamError ?></span>
    <br>
    Adres <input type="text" name="adres" value="<?php echo $adres ?>">
    <span class="error">* <?php echo $adressError ?></span>
    <br>
    Email <input type="email" name="email" value="<?php echo $email ?>">
    <span class="error">* <?php echo $emailError ?></span>
    <br>
    Password <input type="password" name="password" value="<?php $wachtwoord ?>">
    <span class="error">* <?php echo $wachtwoordError ?></span>
    <br>
    <input type="submit" name="knop" value="verstuur">
</form>
</body>
</html>
<?php
echo "<h2>Your Input:</h2>";
echo $naam;
echo "<br>";
echo $email;
echo "<br>";
echo $adres;
echo "<br>";

?>