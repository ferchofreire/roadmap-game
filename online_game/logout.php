<?php
include "conex.php";

session_start();
$_SESSION['pg'] = "";
unset($_SESSION['pg']);
/*session deleted. if you try using this you've got an error*/
    $nombre = $_SESSION["nme_usr"];

    if ($nombre != ""){
        mysqli_query($conn, "UPDATE dinamic_jugadores SET `hash` = NULL WHERE nombre ='".$nombre."'");

        $_SESSION['nme_usr'] = "";
        unset($_SESSION['nme_usr']);
    }
    
session_destroy();
    header("location: loggin")
?>