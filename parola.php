<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola php</title>
</head>
<body>
    
<p> <?php echo $_GET['nomeFrase']; ?> </p> 
<p> <?php echo $_GET['nomeParolaCensurata']; 
echo str_replace ($_GET['nomeParolaCensurata'], '***', $_GET['nomeFrase']);

echo strlen('nomeFrase');

?></p> 
 

</body>
</html>