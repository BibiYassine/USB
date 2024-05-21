<?php
session_start();

// Controleer of het formulier is ingediend
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Controleer of de ingevoerde gegevens overeenkomen met de vooraf gedefinieerde waarden
    if ($username == 'admin' && $password == 'admin') {
        // Als de gegevens overeenkomen, sla dan de gebruikersnaam op in de sessie en stuur de gebruiker door naar de adminoef.php pagina
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit;
    } else {
        // Als de gegevens niet overeenkomen, toon dan een foutmelding
        echo "<p>Verkeerde gebruikersnaam of wachtwoord. Probeer het opnieuw.</p>";
    }
}

// Toon het inlogformulier
echo "<form method='post' action=''>";
echo "<label for='username'>Gebruikersnaam:</label>";
echo "<input type='text' id='username' name='username'>";
echo "<label for='password'>Wachtwoord:</label>";
echo "<input type='password' id='password' name='password'>";
echo "<input type='submit' value='Inloggen'>";
echo "</form>";

echo "<a href='index.php'>Klik hier om naar de home pagina te gaan.</a>";
?>