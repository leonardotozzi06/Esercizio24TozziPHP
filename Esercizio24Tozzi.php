<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mittente = htmlspecialchars($_POST['mittente']);
    $destinatario = htmlspecialchars($_POST['destinatario']);
    $oggetto = htmlspecialchars($_POST['oggetto']);
    $corpo = htmlspecialchars($_POST['corpo']);

    $lunghezzaCorpo = strlen($corpo);
    $numeroParole = str_word_count($corpo);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Creata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .azzurro {
            background-color: lightblue;
            padding: 10px;
            margin-bottom: 20px;
        }
        .arancione {
            background-color: orange;
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
        }
        .grigio {
            background-color: lightgray;
            padding: 10px;
        }
    </style>
</head>
<body>

    <h1>Mail creata</h1>

    <h3>Informazioni</h3>
    <div class="azzurro">
        <p>Indirizzo mail del mittente: <?php echo $mittente; ?></p>
        <p>Indirizzo mail del destinatario: <?php echo $destinatario; ?></p>
        <p>Oggetto della mail: <?php echo $oggetto; ?></p>
    </div>

    <h3>Corpo della mail</h3>
    <div class="arancione">
        <p><?php echo nl2br($corpo); ?></p>
    </div>

    <hr>

    <h3>Statistiche corpo mail</h3>
    <div class="grigio">
        <p>Lunghezza del corpo della mail: <?php echo $lunghezzaCorpo; ?> caratteri</p>
        <p>Numero di parole contenute nel corpo della mail: <?php echo $numeroParole; ?></p>
    </div>

</body>
</html>

<?php
} else {
    echo "Richiesta non valida.";
}
?>
