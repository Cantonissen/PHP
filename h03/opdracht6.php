<!DOCTYPE html>
<html>
<head>
    <title>Zwemmen</title>
    <style>

        table, tr, td {
            border: solid black 1px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        img{
            width: 25px;
            margin-right:10px ;
        }

        td.plaatjes {
            border: solid white 1px
        }

    </style>
</head>
<body>

<table>

<?php

$zwemclubs = array(

        "de spartelkuikens" => 25,
        "de waterbuffels" => 32,
        "plonsmderin" => 11,
        "bommetje" => 23
);

foreach ($zwemclubs as $clubnaam => $zwemmers){

    echo '<tr>';

    //ZWEMCLUBS
    echo "<td>$clubnaam</td>";

    //ZWEMMERSAANTALLEN
    echo "<td>$zwemmers</td>";
    
    $plaatjes = floor($zwemmers / 5);
    echo '<td class="plaatjes">';
    for ($i = 0; $i < $plaatjes ; $i++){
        echo '<img src="img/zwem.png" alt="zwemmers">';
    }
    echo '</td>';

    echo '</tr>';
}
?>

</table>

</body>
</html>
<h1></h1>
<a href="hoofdstuk3.php">Terug</a>