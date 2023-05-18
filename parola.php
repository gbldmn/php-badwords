<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola php</title>
</head>
<body>
    
<span> <?php echo $_GET['nomeFrase'];  ?> </span> 
<p>la frase è lunga: <?php echo strlen($_GET['nomeFrase']); ?></p>
<p> <?php 
echo str_replace ($_GET['nomeParolaCensurata'], '***', $_GET['nomeFrase']);

 $stringaModificata = str_replace($_GET['nomeParolaCensurata'], '***', $_GET['nomeFrase']);

?></p>
 
 <p>la lunghezza finale è di :<?php echo strlen($stringaModificata); ?></p>

</body>
</html>