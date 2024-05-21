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
        if (isset($_POST["knop"])){
            if (($_POST["gebruikersnaam"]=="gebruiker") and ($_POST["wachtwoord"]=="gebruiker")){
                $_SESSION["inlog"]="gebruiker";
                print "<br> Je bent ingelogd als een gebruiker. <br>Klik <a href='acount.php'>hier</a> om naar eigen profiel te gaan of om naar contactpagina te gaan via <a href='contact.php'>hier</a>.  ";
            }
            if(!isset($_SESSION["inlog"])){
                print "<br>Login mislukt <br>Klik <a href='index.php'>hier</a> om naar de home pagina te gaan. Je zal hier niet binnen geraken en je zal opnieuw moeten inloggen";
            }
        }

        else{
            echo '
            <table>
                <form method="post" action="login.php">
                    <tr><td>Gebruikersnaam</td><td><input type="text" name="gebruikersnaam"></td></tr>
                    <tr><td>Wachtwoord</td><td><input type="text" name="wachtwoord"></td></tr>
                    <td><td><input type="submit" name = "knop" value="Doorsturen!"></td></tr>
                </form>                
            </table>';

        }                  
        ?>



</body>
</html>