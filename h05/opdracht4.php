<?php

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php
$gebruikers = array(
        array(
            "email" => "piet@worldonline.nl", "klaas@carpets.nl", "truushendriks@wegweg.nl",
            "psw" => "doetje123", "snoepje777", "arkiearkie201"
        )
);
if (!empty($_POST["email"]) && !empty($_POST["psw"])) {
    if (bestaat()) {
        exit("Welkom");
    } else {
        exit("Sorry, geen toegang!");
    }
} else {
    exit("Sorry, geen toegang!");
}

//function bestaat() {
//    foreach ($gebruikers as &$gebruiker) {
//        if ($gebruiker["gebruikers"] == $_POST["gebruikers"] && $gebruiker["email"] == $_POST["email"]) {
//            return true;
//        }
//    }
//    return false;
//}
?>
<form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1>Login</h1>
    <label for="email"><br>E-Mail</br></label>
    <input type="email" name="email" value="" required>

</form>
</body>
<a href="hoofdstuk5.php">Terug</a>

