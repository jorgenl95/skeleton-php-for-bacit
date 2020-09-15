<!DOCTYPE html>
<html>
    <head>
        <title>
            Modul 3 - Oppgave 4
        </title>
    </head>
    <body>
        <h2>Oppgave 4: sjekk av skjema</h2>

        <form action="oppgave4.php" method="POST">
            <label for="navn">Navn:</label><br>
            <input type="text" id="navn" name="navn"><br>
            <label for="adresse">Adresse:</label><br>
            <input type="text" id="adresse" name="adresse"><br>
            <label for="telefonnummer">Telefonnummer:</label><br>
            <input type="text" id="telefonnummer" name="telefonnummer"><br><br>
            <input type="submit" value="Submit">
        </form>
        <br>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $felter = array("navn", "adresse", "telefonnummer");
                $tomtfelt = false;

                foreach ($felter as $v) {
                    if(!isset($_POST[$v]) || empty($_POST[$v]))
                    {
                        echo ucfirst($v) . " er ikke fylt ut.<br>";
                        $tomtfelt = true;
                    }
                }
                
                if($tomtfelt == false)
                    echo "Alt ok!";
            }
        ?>
    </body>
</html>