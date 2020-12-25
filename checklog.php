<?php

session_start();
if (!isset($_SESSION['check']) || $_SESSION['check'] != true) header("location:login.php?errore=4");
$utente = mysql_query("SELECT");

include_once ('menu.php');
?>