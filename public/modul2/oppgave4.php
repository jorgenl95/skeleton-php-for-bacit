<!DOCTYPE html>
<?php 
$medlem1 = 194283;
$medlem2 = 194284;
?>
<html>
    <head>
        <title>
            Modul 2 - Oppgave 4
        </title>
    </head>
    <body>
        <p><?php echo "Medlemsnummer 1: " . $medlem1 ?></p>
        <p><?php echo "Medlemsnummer 2: " . $medlem2 ?></p>
        <p><?php 
            if(var_export($medlem1 == $medlem2, true) == "true")
            {
                echo "Medlemsnummer 1 og 2 er like.";
            } else
            {
                echo "Medlemsnummer 1 og 2 er ikke like.";
            }
            ?></p>
    </body>
</html>