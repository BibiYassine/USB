<?php
session_start();
include "connect.php";

// Wijzig de SQL-query om 5 willekeurige oefeningen te selecteren
$sql = "SELECT * FROM tbl_oefeningen ORDER BY RAND() LIMIT 5";

$resultaat = $mysqli->query($sql);

echo "<form method='post' action=''>";

while ($row = $resultaat->fetch_assoc()) {
    echo "<div>";
    echo "<h2>Oefening: " . $row['oefening'] . "</h2>";
    echo "<input type='hidden' name='oefeningnummer[]' value='" . $row['oefeningnummer'] . "'>";
    echo "<textarea name='antwoord[]' placeholder='Schrijf hier je antwoord...'></textarea>";
    echo "</div>";
}

echo "<input type='submit' name='inleveren' value='Inleveren'>";
echo "</form>";

if (isset($_POST['inleveren'])) {
    $_SESSION['oefeningnummer'] = $_POST['oefeningnummer'];
    $_SESSION['antwoord'] = $_POST['antwoord'];
    header("Location: oplossing.php");
    exit;

    
}
echo "<a href='index.php'>Klik hier om naar de home pagina te gaan.</a>";
?>