<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>Welkom " . $_SESSION["user"]["naam"] . " op het admingedeelte van de website</h1>";
    echo "<p><a href='opdracht1.php'>login</a></p>";
} else {
    echo "<h1> U heeft de rechten niet voor deze pagina </h1>";
    echo "<p><a href=\"website.php\">Website</a></p>";
}
