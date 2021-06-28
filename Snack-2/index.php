<?php 
/*
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$nome = $_GET["name"];
$email = $_GET["mail"];
$eta = $_GET["age"];

;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <div>
    <h1>Verifica d'accesso</h1>
        <?php     
        if(empty($nome) && empty($email) && empty($eta)) {
            echo "Inserisci le query richieste: name, mail ed age";
        } else {
            if(strlen($nome) > 3 && strpos($email, ".") !== false && strpos($email, "@") !== false && is_numeric($eta)) {
                echo "Accesso Riuscito";
            } else {
                echo "Accesso Negato";
            }
        } 
        ?>
    </div>
</body>
</html>
