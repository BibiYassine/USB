<?php
include "connect.php";

for ($i = 1; $i <= 10; $i++) {
    $getal1 = rand(1, 100);
    $getal2 = rand(1, 100);
    $operatoren = rand(1, 4);

    switch ($operatoren) {
        case 1:
            $oefening = "$getal1 + $getal2";
            $oplossing = $getal1 + $getal2;
            break;
        case 2:
            $oefening = "$getal1 - $getal2";
            $oplossing = $getal1 - $getal2;
            break;
        case 3:
            $oefening = "$getal1 * $getal2";
            $oplossing = $getal1 * $getal2;
            break;
        case 4:
            if ($getal1 % $getal2 != 0) {
                $getal1 = $getal1 + $getal2 - ($getal1 % $getal2); // Round up the dividend to make the division result an integer
            }
            $oefening = "$getal1 / $getal2";
            $oplossing = $getal1 / $getal2;
            break;
    }

    $sql = "INSERT INTO tbl_oefeningen (oefening, oplossing) VALUES ('$oefening', '$oplossing')";
    $mysqli->query($sql);
}

echo "10 random gehele getallen oefeningen zijn toegevoegd aan de tabel.";
echo "<a href='admin.php'><br>Ga terug.</a>";
?>