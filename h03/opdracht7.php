<!DOCTYPE html>
<html>
<head>
    <title>Kapperszaak</title>
</head>
<body>
<?php

$kappersagenda = array(
    "Mevr. Pietersen" => "9.15",
    "Mevr. Willems" => "9.30",
    "Paul van den Broek" => "10.00",
    "Karel de Meeuw" => "10.15",
    "beschikbaar" => "9.45", "10.30"
);

$tijd = "beschikbaar";

print ("De volgende momenten zijn nog beschikbaar: <ul>");

foreach ($kappersagenda as $afspraak => $tijd) {

    if ($afspraak == "beschikbaar") {
        print ("<li>".$tijd."</li>");
    }
}
?>
</body>
</html>
<h1></h1>
<a href="hoofdstuk3.php">Terug</a>