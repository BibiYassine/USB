<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn account</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    



<header>
        <h1>Mijn Profiel</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="info.php">Info</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="registreren.php">Registreren</a></li>
                <li><a href="acount.php">Mijn Profiel</a></li>
            </ul>
        </nav>
    </header>
    <?php 
    if(isset($_SESSION["inlog"])){
        if ($_SESSION["inlog"]=="gebruiker"){
            print "Je bent ingelogd als gebruiker. 
            <br> Naam: gebruiker
            <br> Wachtwoord: gebruiker";
        }
        if($_SESSION["inlog"]=="admin"){
            print "Je bent ingelogd als admin. <br> Naam: admin
            <br> Wachtwoord: admin.
            <br> Adres: Adminsesteenweg
            <br> Nummer: admin1
            <br> Plaats: Mechelen     ";
        }
        print "<br> <a href='loguit.php'>Log uit. Je zal terug moeten inloggen om deze pagina te kunnen bekijken.</a>";
    }

    else {
        header('Location: login.php');
    }
?>


    <footer>
        <p>&copy; 2024 Yamaha Corporation</p>
    </footer>

</body>
</html>