<?php
session_start();
if((session_status() == PHP_SESSION_ACTIVE)&&(isset($_SESSION['check'])&&$_SESSION['check']==true)){
    header("location: profilo.php");
}
session_abort();
?>
<!doctype html>
<!--in questa pagina viene illustrata tutto il codice relativo al login-->
<!--i punti importanti da chiarire sono questi:
    -   lo stile cambia a seconda della larghezza dello schermo del device, quindi non è qui lo stile ma in un foglio apparte
    -   il form è pensato per tutti i tipi di clienti della P.A. quindi non solo comandi
-->
<?php
$errore=(isset($_GET['errore'])&&$_GET['errore']!='')?$_GET['errore']:'';
if($errore==1){
    $errore='<div class="alert alert-danger" role="alert">Tutti i campi sono obbligatori, assicurati di averli compilati!</div>';
}elseif($errore==2){
    $errore='<div class="alert alert-danger" role="alert">Codice Ufficio non valido, assicurati di aver compilato il campo correttamente!</div>';
}elseif($errore==3){
    $errore='<div class="alert alert-danger" role="alert">Dati non corretti, potrebbe essere un errore di inserimento o semplicemente l\'utenza non &egrave; attiva, si consiglia di contattare l\'assistenza!</div>';
}elseif($errore==4){
    $errore='<div class="alert alert-danger" role="alert">Devi prima effettuare l\'accesso.</div>';
}else{
    $errore='';
}
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Turn</title>
</head>

<body onload="document.getElementById('Ufficio').focus();">
<?php echo $errore; ?>
<div class="mx-auto access">
    <h2 style="padding:5vw">Accedi a Turni</h2>
    <form action="elabora.php" class="form-login" method="POST">
        <input name="ufficio" id="Ufficio" placeholder="Ufficio" type="text" style="width:90%;margin:15px;" class="form-control">
        <input name="utente" placeholder="Nome Utente" type="text" style="width:90%;margin:15px;" class="form-control">
        <input name="password" placeholder="Password" type="password" style="width:90%;margin:15px;" class="form-control">
        <button type="submit" style="width:90%;margin:15px;" id="Accedi" class="btn btn-primary">Accedi</button>
        <small class="form-text text-muted" style="margin:15px;" >Scritto e prodotto da Andrea Pecoraro.</small>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<!--<script>
    $('#Accedi').click(function() {
        var ufficio = $("#ufficio").val();
        var utente = $("#utente").val();
        var password = $("#password").val();
        $.ajax({

            //imposto il tipo di invio dati (GET O POST)
            type: "POST",

            //Dove devo inviare i dati recuperati dal form?
            url: "elabora.php",

            //Quali dati devo inviare?
            data: "ufficio=" + ufficio + "&utetnte=" + utente + "&password=" + password,
            dataType: "html",
            //Inizio visualizzazione errori
            success: function(msg)
            {
                let call=JSON.parse(msg);
                console.log(call);
            }
        });
    });
</script>-->
</body>
</html>
