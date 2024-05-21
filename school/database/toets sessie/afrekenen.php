<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php

echo '<h3>'.'Rekening van '.$_SESSION["naam"].'</h3> <br>
       Cola: 3 aan 2 euro: 6euro <br>
       Water: 0 aan 2 euro: 0 euro <br>
       Pint: 4 aan 2.5 euro: 10 euro <br>
       Wijn: 1 aan 4 euro: 4 euro <br>
       Totaal: 20 euro';


echo'<br> 
    Druk <a href="verwijder.php">hier</a> om alles te annuleren of om je nieuwe rekening te verwijderen.'
?>


</body>
</html>
