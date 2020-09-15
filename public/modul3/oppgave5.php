<!DOCTYPE html>
<html>
    <head>
        <title>
            Modul 3 - Oppgave 5
        </title>
    </head>
    <body>
        <?php
            $fornavn = "Peter";

            date_default_timezone_set("Europe/Oslo");
            $tid = date("H.i");
            $timer = (explode(":", $tid, 2))[0];
            
            if($timer > 00 && $timer < 06)
            {
                echo "God natt " . $fornavn . "!";
            }
            elseif ($timer > 06 && $timer < 12) {
                echo "God morgen " . $fornavn . "!";
            }
            elseif ($timer > 12 && $timer < 16) {
                echo "God formiddag " . $fornavn . "!";
            }
            elseif ($timer > 16 && $timer < 20) {
                echo "God ettermiddag " . $fornavn . "!";
            }
            elseif ($timer > 20 && $timer < 00)
            {
                echo "God kveld " . $fornavn . "!";
            }
            
            echo "<br><br>Klokken er nå " . $tid;
        ?>
    </body>
</html>