<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="ytbclone";
/* Create connection */
$connection = mysqli_connect($servername, $username, $password,$db);

    if(!$connection) {
        die ("Database Connexion Failed");
    } 
    ?>