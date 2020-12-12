<?php
session_start();
if(!isset($_SESSION['check'])||$_SESSION['check']!=true) header("location:login.php?errore=4");
$utente = mysql_query("SELECT");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Turn - Profilo</title>
</head>
<?php
include_once ('menu.php');
?>
<body onload="document.getElementById('profilo').className='nav-link active';"style="background-color:#e3f2fd">

<div style="padding:10px;margin-top:15px;background-color:white;width:90vw;min-height:80vh;border-radius:5px;" class="mx-auto">
    <div style="margin-top:15px;background-color:white;width:40vw;min-height:80vh;border-radius:5px;" class="mx-auto">
    <h1 style="text-align:center;"class="h2">Il Mio Profilo</h1>
        <form>
            <div class="form-floating">
                <input disabled type="Text" class="form-control" id="Nome" placeholder="Mario" value="Mario">
                <label for="Nome">Nome</label><br/>
            </div>
            <div class="form-floating">
                <input disabled type="Text" class="form-control" id="Cognome" placeholder="Mario" value="Rossi">
                <label for="Cognome">Cognome</label><br/>
            </div>
            <div class="form-floating">
                <input disabled type="Text" class="form-control" id="Mansione" placeholder="Mario" value="Impiegato">
                <label for="Mansione">Mansione</label><br/>
            </div>
        </form>
    <div>
</div>


<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>