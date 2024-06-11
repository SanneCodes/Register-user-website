<?php

session_start(); //starter eller fortsetter eksisterende session
session_unset(); //tar vekk definerte session variabler
session_destroy(); //avslutter session
header("Location: ../html/login.html"); 
exit(); 

?>