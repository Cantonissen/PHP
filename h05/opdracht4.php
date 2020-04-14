<?php
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $error = "";
    $toegang = "";

    if (isset($_POST['submit'])){
        if ($email == "pet@worldonline.nl"){
            if ($psw == "doetje123"){
                $error = "";
                $toegang = "Welkom!";
            } else {
                $error = "Sorry, geen toegang!";
                $toegang = "";
            }
        } else {
            $error = "Sorry, geen toegang!";
            $toegang = "";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <div class="container">
<h1>Login</h1>
<p class="error"><?php echo $error; ?></p><p class="toegang"><?php echo $toegang; ?></p>
<form method="post">
    <input type="text" name="email" value="" required>
    <input type="password" name="psw" value="" required>
    <input type="submit" name="submit" value="verstuur">
</form>
    </div>
<a href="hoofdstuk5.php">Terug</a>
</body>
</html>
