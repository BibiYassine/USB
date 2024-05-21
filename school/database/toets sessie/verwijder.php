<?php
// Start de sessie.  Begin hier telkens mee op elke pagina!
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
    session_destroy();
    print "<br>Alles is geannuleerd.";
    print "<br><a href='index.php'>Ga naar Home pagina om opnieuw te beginnen</a>";
?>
</body>