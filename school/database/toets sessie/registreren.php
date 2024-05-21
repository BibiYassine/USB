<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drankverbruik Registreren</title>
</head>
<body>
    
<?php

echo '<h3>'.'Rekening van '.$_SESSION["naam"].'</h3>';


echo '
                <table>
                    <form method="post" action="afrekenen.php">
                        <tr><td>Aantal</td><td><input type="text" name="voornaam"></td></tr>
                        <select name="drank" id="drank">
                            <option value="Cola">Cola</option>
                            <option value="Water">Water</option>
                            <option value="Pint">Pint</option>
                            <option value="Wijn">Wijn</option>
                        </select>
                          
                        <td><td><input type="submit" name = "knop" value="Bestel!"></td></tr>
                    </form>                
                </table>';
                

?>



</body>
</html>