<?php
    //print_r($_POST['dieren']);

    foreach ($_POST['dieren'] as $dieren) {
        echo "<img src='img/".$dieren.".jpg'>";
    }
    //echo "<img src='img/".$_POST['dieren'].".jpg'>";
?>
