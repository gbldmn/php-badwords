<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="parola.php" method="GET">

<div>

<label for="">parola</label>
<input type="text" placeholder="inserisci la frase" name="nomeFrase">

<label for="">seconda parola</label>
<input type="text" placeholder="inserisci seconda parola" name="nomeParolaCensurata">

<button type="submit"> invia form </button>

 <?php var_dump('test');  ?> 
</div>


</form>






</body>
</html>