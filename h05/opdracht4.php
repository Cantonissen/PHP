<!DOCTYPE html>
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    if ($email == "piet@worldonline.nl" && $psw == "doetje123") {
        echo("Welkom");
    } elseif ($email == "klaas@carpets.nl" && $psw == "snoepje777") {
        echo ("Welkom");
    } elseif ($email == "truushendriks@wegweg.nl" && $psw == "arkiearkie201") {
        echo("Welkom");
    }
    else {
        echo("Sorry, geen toegang!");
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="" method="post">
    <table align="center">
        <tr>
            <td>E-Mail:</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Wachtwoord:</td>
            <td><input type="password" name="psw" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>
<a href="hoofdstuk5.php">Terug</a>
</body>
</html>
