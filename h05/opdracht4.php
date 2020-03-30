<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h2>Voeg uw E-Mail en wachtwoord in</h2>
        <?php
            $message = '';

            if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['wachtwoord'])) {
                if ($_POST['email'] == 'piet@worldonline.nl' &&
                    $_POST['wachtwoord'] == 'doetje123') {
                    $_SESSION = true;

                    echo 'Welkom';

                } elseif (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['wachtwoord'])) {
                    if ($_POST['email'] == 'klaas@carpets.nl' &&
                        $_POST['wachtwoord'] == 'snoepje777') {
                        $_SESSION = true;

                        echo 'Welkom';

                    } elseif (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['wachtwoord'])) {
                        if ($_POST['email'] == 'truushendriks@wegweg.nl' &&
                            $_POST['wachtwoord'] == 'arkiearkie201') {
                            $_SESSION = true;

                            echo 'Welkom';
                        } else {
                            $message = 'Sorry, geen toegang!';
                        }
                    }
                }
            }
?>

</body>