<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe rekening openen</title>
</head>
<body>
 
<?php
if (isset($_POST["knop"])) {
    $_SESSION["naam"] = $_POST["naam"];
    header("location: registreren.php");
}else
echo '<h3>Nieuwe rekenening </h3>';
echo '<form method="post" action="rekening.php">
<label>Voer hier een naam in voor de nieuwe rekening<label>
<input type="text" name="naam"><br>
<input type="submit" name = "knop" value="Druk hier!">
</form> ';
?>




</body>
</html>