<?php
#TODO:bisognerebbe scrivere il funzionamento del programma entro domani;
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
if($ufficio==''||$utente==''||$password=='')
{
    header("location:login.php?errore=1");
}
else
{
    //SE NON SONO VUOTE LE VARIABILI, EFFETTTUO ALTRI CONTROLLI//-------->
    $server = "localhost";
    $utente_server = "root";
    $pwd_server = "PvG7C8aYkx};^Z_7";
    $database = $_POST['ufficio']."_turni";
    $conn_server = @mysql_connect($server, $utente_server, $pwd_server);
    $conn_database = mysql_select_db($database);
    //CONTROLLO CHE IL CODICE UFFICIO SIA STATO INSERITO CORRETTAMENTE
    // E QUINDI CHE IL DB ESISTA
    if(!$conn_database){
        header("location:login.php?errore=2");
    }else{
        //se mi trovo nell'else significa che ho compilato i campi
        $oggi = date('Y-m-d');
        $checkutenza = mysql_query("SELECT * FROM dipendenti WHERE utente ='$utente' AND password='$password' AND utenza_attiva='1' AND data_assunzione<='$oggi' AND (data_licenziamento>='$oggi'||data_licenziamento IS null)");
        $n_utenza = mysql_num_rows($checkutenza);
        //echo $n_utenza;
        if($n_utenza>=1){
            session_start();
            $arrayuser = mysql_fetch_assoc($checkutenza);
            $_SESSION['server'] = $server;
            $_SESSION['utente_server'] = $utente_server;
            $_SESSION['pwd_server'] = $pwd_server;
            $_SESSION['pwd_server'] = $database;
            $_SESSION['check'] = true;
            $_SESSION['utente'] = $arrayuser;
            header("location:profilo.php");
        }else{
            header("location:login.php?errore=3");
        }

    }
}

?>