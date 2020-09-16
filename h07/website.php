<?php
    session_start();

    if (isset($_SESSION["user"])) {
        echo "<h1>Welkom " . $_SESSION["user"]["naam"]. " op de website</h1>";
        echo "<p><a href='opdracht1.php'>login</a></p>";
            } else {
        header('location: opdracht1.php');
    }
