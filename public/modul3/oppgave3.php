<!DOCTYPE html>
<html>
    <head>
        <title>
            Modul 3 - Oppgave 3
        </title>
    </head>
    <body>
        <h2>
            Oppgave 3: liten regnemaskin
        </h2>

        <?php
            $tall1 = 5;
            $tall2 = 10;
            for ($i=1; $i <= 10; $i++) { 
                echo "Runde ". $i . ":<br>Sum: " . ($tall1 + $tall2) . ", differanse: " . ($tall1 - $tall2) . ", gjennomsnitt: " . ($tall1 + $tall2) / 2 . "<br><br>";
                $tall1++;
            }
            echo "<strong>Svar på spørsmål: </strong><br>";
            echo "Ja, \$tall2 kan kan være en annen datatype, fordi PHP automatisk utfører typecasting til riktig datatype dersom den brukes sammen med andre datatyper senere.";
            echo "<br>For eksempel, hvis \$tall2 inneholder tallet \"5\" som en string som senere blir brukt i operasjonen \$tall1 + \$tall2, så blir \$tall2 automatisk konvertert til int så lenge \$tall1 er en integer.";
            echo "<br>Når det er sagt, så kan ikke \$tall2 inneholde bare tekst for eksempel, den må inneholde et tall, da tekst ikke kan bli automatisk konvertert til et tall."
        ?>
    </body>
</html>