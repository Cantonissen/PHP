<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="" method="post">
    <table align="center">

<?php

$servername = "localhost";
$dbname = "school";
$username = "id13014440_root";
$password = "l8qlHTwf{V]fjv08";

try {
    $conn = new PDO("mysql:host={$servername};$dbname={$dbname}", $username, $password);
}   catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die("Error 1");
$stmt->execute() or die('Error 2');

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['cursistnr'] . "</td>";
    echo "<td>" . $row['naam'] . "</td>";
    echo "<td>" . $row['roepnaam'] . "</td>";
    echo "<td>" . $row['straat'] . "</td>";
    echo "<td>" . $row['postcode'] . "</td>";
    echo "<td>" . $row['plaats'] . "</td>";
    echo "<td>" . $row['geslacht'] . "</td>";
    echo "<td>" . $row['geb_datum'] . "</td>";
    echo "</tr>";

}
        ?>

    </table>
</form>
<a href="hoofdstuk6.php">Terug</a>
</body>
</html>
