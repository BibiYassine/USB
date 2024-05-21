<?php
session_start();
include "connect.php";

$score = 0;

if (isset($_SESSION['oefeningnummer'])) {
    foreach ($_SESSION['oefeningnummer'] as $index => $oefeningnummer) {
        $sql = "SELECT oplossing FROM tbl_oefeningen WHERE oefeningnummer = $oefeningnummer";
        $resultaat_oplossing = $mysqli->query($sql);
        $row_oplossing = $resultaat_oplossing->fetch_assoc();
        echo "<div>";
        echo "<h2>Oplossing voor oefening " . $oefeningnummer . ": </h2>";
        echo "<p>" . $row_oplossing['oplossing'] . "</p>";
        echo "</div>";
        if ($_SESSION['antwoord'][$index] == $row_oplossing['oplossing']) {
            $score++;
        }
    }
    echo "<h2>Je score is: " . $score . "/5</h2>";
    
}
echo "<a href='index.php'>Klik hier om naar de home pagina te gaan.</a>";
?>