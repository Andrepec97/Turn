<?php
/*
 * Questa pagina serve per testare l'utenza e
 * valutare se è possibile accedere al programma o
 * se riitornare sull'index del programma con un errore legato
 * all'errata compilazione dei campi
 * */

//In questa fase semplicemente metto dentro
//alcune variabili i dati _POST che arrivano da index

    //CON QUESTI COSTRUTTI DI SOTTO SETTO LA VARIABILE CON LA POST SOLO SE MI ARRIVANO
    //DATI E MI ARRIVANO DATI DIVERSI DA ''
    $ufficio = (isset($_POST['ufficio'])&&$_POST['ufficio']!='')?$_POST['ufficio']:'';
    $utente = (isset($_POST['utente'])&&$_POST['utente']!='')?$_POST['utente']:'';
    $password = (isset($_POST['password'])&&$_POST['password']!='')?$_POST['password']:'';

//------------------------------>
//FATTO QUESTO COMINCIO A FARE ALCUNI CONTROLLI

    //IL PRIMO CONTROLLO È CHE TUTTE LE VARIABILI SIANO VALORIZZATE
    if($ufficio==''||$utente==''||$password=='')die('{"Esito" :"KO","Errore" :"Compilare tutti i campi per accedere"}');
//------------------------------>




$_SESSION['server'] = "localhost";
$_SESSION['utente_server'] = "root";
$_SESSION['pwd_server'] = "PvG7C8aYkx};^Z_7";

$database = $_POST['ufficio']."_turni";
//die("$database");
$db = @mysql_connect($_SESSION['server'], $_SESSION['utente_server'], $_SESSION['pwd_server']);
mysql_select_db($database) or die("db sconosciuto");
$checkutenza = mysql_query("SELECT * FROM dipendenti");
session_start();


?>