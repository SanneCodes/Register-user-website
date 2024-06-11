<?php

session_start(); //start eller fortsett eksisterende session
if (!isset($_SESSION["userId"])){ //hvis session ikke har lagret en userId, skal programmet redirektere deg til login side
    header("Location: login.html");
    exit;
}

?>
