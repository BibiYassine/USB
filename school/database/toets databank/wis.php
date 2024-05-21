<?php
include "connect.php";
?>

<?php

$sqlTwo = "DELETE FROM tbl_oefeningen WHERE oefeningnummer = ".$_GET['TeVerwijderen']."";
$resultaat = $mysqli->query($sqlTwo);
echo "Record is verwijderrd.";
echo "<a href = 'admin.php'><br>Ga terug.</a>";

?>