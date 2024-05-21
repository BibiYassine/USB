<?php
session_start();

// Verwijder de gebruikersnaam uit de sessie
unset($_SESSION['username']);

// Stuur de gebruiker terug naar de inlogpagina
header("Location: admin.php");
exit;
?>