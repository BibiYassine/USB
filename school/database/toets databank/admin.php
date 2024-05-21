<?php
session_start();

if (!isset($_SESSION['username'])) {

    header("Location: login.php");
    exit;
}

include("connect.php");




include "connect.php";
$sql = "select * from tbl_oefeningen";

$resultaat = $mysqli->query($sql);

echo "<a href = 'loguit.php'>Uit loggen</a>";
echo "<br><br>
<a href = 'genereer.php'>10 willekeurige oefeningen laten genereren.</a>
<br><br>
<a href = 'toevoegen.php'>Toevoegen</a>
<br><br>";

echo "<table>";
while ($row = $resultaat->fetch_assoc()) {
    echo "
    <tr>
    <td>". $row['oefeningnummer']. "</td>
    <td>". $row['oefening'] ." =</td>
    <td>". $row['oplossing'] . 
    "<a href = 'wijzigen.php?TeWijzigen=".$row['oefeningnummer']."'>Wijzigen</a>
    <a href = 'wis.php?TeVerwijderen=".$row['oefeningnummer']."'>Verwijderen</a></td>
    </tr>";
}
echo "</table>";


?>