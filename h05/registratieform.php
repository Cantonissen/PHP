<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

<?php
//Variabelen
$naamError = $emailError = $adressError = $wachtwoordError = "";
$naam = $email = $adres = $wachtwoord = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["naam"])) {
        $naamError = "Naam is verplicht";
    } else {
        $naam = test_input($_POST["naam"]);
    }
    if (empty($_POST["adres"])) {
        $adressError = "Adres is verplicht";
    } else {
        $adres = test_input($_POST["adres"]);
    }
    if (empty($_POST["email"])) {
        $emailError = "E-Mail is verplicht";
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["wachtwoord"])) {
        $wachtwoordError = "Wachtwoord is verplicht";
    } else {
        $wachtwoord = test_input($_POST["wachtwoord"]);
    }
}
?>

<form action="resultaat.php" method="get">
      <div class="formulier">
          <h1>Registratieformulier</h1>
          <p>Vul dit formulier in om u te registreren.</p>
          <hr>
          <label for="naam"><b>Naam</b></label>
          <input type="text" placeholder="Naam" name="naam" required>

          <label for="adres"><b>Adres</b></label>
          <input type="text" placeholder="Adres" name="adres" required>

          <label for="email"><b>E-Mail</b></label>
          <input type="email" placeholder="E-Mail" name="email" required>

          <label for="wachtwoord"><b>Wachtwoord</b></label>
          <input type="password" placeholder="Wachtwoord" name="wachtwoord" required>
      </div>
    <input type="submit" name="knop" value="verstuur">
</form>
</body>