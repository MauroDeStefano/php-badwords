<?php

$frase = "Questa è la frase in cui eviedentemente c'è qualche parola che non piace, quindi non farti problemi a censurare qualcosa.";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo str_replace($_GET['toClear'] , "***", $frase)?>
    </h1>
    <h2>Questo paragrafo è lungo <?php echo strlen(str_replace($_GET['toClear'] , "***", $frase)) ?></h2>

</body>
</html>