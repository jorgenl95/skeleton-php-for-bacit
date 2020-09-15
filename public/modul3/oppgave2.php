<!DOCTYPE html>
<html>
    <head>
        <title>
            Modul 3 - Oppgave 2
        </title>
    </head>
    <body>
        <h2>
            Oppgave 2: teller
        </h2>

        <?php
            $teller = 0;
            for ($i=0; $i <= 9 ; $i++) { 
                echo "$i<br>";
                $teller += $i;
            }
            echo "Juhuu, ferdig å telle! Summen av tallene ble $teller.";
        ?>
    </body>
</html>