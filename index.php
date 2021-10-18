


<?php
//Descrizione:
//Creare una variabile con un paragrafo di testo a vostra scelta.
//Stampare a schermo il paragrafo e la sua lunghezza.
//Una parola da censurare viene passata dall'utente tramite parametro GET.
//Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
$paragrafo= 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim distinctio voluptatum delectus, odio modi officia inventore quasi! Porro, neque inventore quam quod est officia sapiente illum cumque laboriosam voluptate facere.';
$parolacensurata= $_GET['parola'];
$censura= str_replace($parolacensurata, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censurami</title>
</head>
<body>

    <h2>Paragrafo Originale</h2>
    <p><?php echo $paragrafo; ?></p>
    <h4>La frase contiene <?php echo strlen($paragrafo); ?> caratteri </h4>

    <hr>

    <h2>Paragrafo con Censura</h2>
    <p><?php echo $censura; ?></p>
    <h4>La frase ora contiene <?php echo strlen($censura); ?> caratteri </h4>


</body>
</html>
