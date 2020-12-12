<?php
session_start();
$gestione_dipendenti='';
if($_SESSION['utente']['livello_utente']!=1){
    $gestione_dipendenti = '';
}else{
    $gestione_dipendenti = "<li class='nav-item'><a id='GestioneDipendenti' class='nav-link' aria-current='page' href='gestione_dipendenti.php'>Gestione Dipendenti</a></li><li class='nav-item'><a id='GestioneReparti' class='nav-link' aria-current='page' href='gestione_reparti.php'>Gestione Reparti</a></li>";
}
?>
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="profilo.php">&nbsp;Gestionale Personale - Utente Connesso: <?php echo $_SESSION['utente']['nome'].' '.$_SESSION['utente']['cognome'] ?></a>
        <button onclick="window.location.href='logout.php'" style="margin-right:10px;" class="btn btn-outline-light">Log-out</button>
    </div>
    <!-- Navbar content -->
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!--<a class="navbar-brand">Profilo </a>-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="profilo" class="nav-link" href="profilo.php">Profilo</a>
                </li>
                <?php echo $gestione_dipendenti; ?>
                <li class="nav-item">
                    <a id="turni" class="nav-link" href="turni.php">Turni</a>
                </li>
                <li class="nav-item">
                    <a id="impostazioni" class="nav-link" href="impostazioni.php">Impostazioni</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


