<?php
include "connect.php";
?>


<?php

if (isset($_POST["submit"])) {

    
    $oefening = $_POST["oefening"];
    eval( '$result = (' . $oefening. ');' );
    
 
    $sqlOne = "INSERT INTO tbl_oefeningen(oefening, oplossing)
    VALUES('".$oefening."', '".$result."')";

    $resultaat = $mysqli->query($sqlOne);
    echo "Oefening is correct toegevoegd.";
    echo "<a href = 'admin.php'>Ga terug.</a>";

    

} else {
    echo '
    <table>
    <form action = "toevoegen.php" method = "post">
    <label>Oefening</label><br>
    <input type = "text" name = "oefening"><br>
    <input type = "submit" name = "submit" value = "Verzenden">
    </form>
    </table>';
}

?>