<?php
include "connect.php";

$sql = "select * from tbl_oefeningen";

$resultaat = $mysqli->query($sql);


if (isset($_POST["submit"])) {

    $VeranderdeOefening = $_POST["oefening"];

    eval('$result = (' . $VeranderdeOefening. ');');

    $oefeningnummer = $_GET['TeWijzigen'];
    $sqlFour = "UPDATE tbl_oefeningen 
    SET oefening = '".$VeranderdeOefening."', oplossing = '".$result."'
    WHERE oefeningnummer = '".$oefeningnummer."'";

    $resultaat = $mysqli->query($sqlFour);
    echo 'Tabel is aangepast.<br>';
    echo "<a href = 'admin.php'>Ga terug.</a>";

} else {
    if (isset($_GET['TeWijzigen'])) {
        $sqlThree = "SELECT * FROM tbl_oefeningen WHERE oefeningnummer = ".$_GET['TeWijzigen'];
        $resultaat = $mysqli->query($sqlThree);

        while ($row = $resultaat->fetch_assoc()) {
            $oefeningnummer = $row['oefeningnummer'];
            $oefening = $row['oefening'];
            $oplossing = $row['oplossing'];
        }

        echo '
        <table>
        <form action="wijzigen.php?TeWijzigen='.$_GET['TeWijzigen'].'" method="post">
        <label>oefening</label><br>
        <input type="text" name="oefening" value="'.$oefening.'"><br>
        <input type="submit" name="submit" value="Verzenden">
        </form>
        </table>';
    } else {
        echo "TeWijzigen parameter is niet klaar.";
    }
}
?>
