<!DOCTYPE html>
<html>
    <head>
        <title>
            Modul 3 - Oppgave 1
        </title>
    </head>
    <body>
        <h2>Oppgave 1: alderen til en person</h2>
        <form action="oppgave1.php" method="POST">
            <label for="navn">Navn:</label><br>
            <input type="text" id="navn" name="navn"><br>
            <label for="alder">Alder:</label><br>
            <input type="text" id="alder" name="alder"><br><br>
            <input type="submit" value="Submit">
        </form>
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(isset($_POST["navn"]) && !empty($_POST["navn"]))
                    $navn = $_POST["navn"];
                else
                    exit("<br>Navn ble ikke skrevet inn.");
                
                if(isset($_POST["alder"]) && !empty($_POST["alder"]))
                    $alder = $_POST["alder"];
                else
                    exit("<br>Alder ble ikke skrevet inn");
                
                if($alder > 18)
                    echo "<br> $navn er $alder og dermed myndig.";
                else
                    echo "<br> $navn er $alder og dermed ikke myndig.";

                switch($_POST["alder"])
                {
                    case $_POST["alder"] > 12 && $_POST["alder"] < 20:
                        echo "<br> $navn er en tenåring.";
                        break;
                    case $_POST["alder"] > 66:
                        echo "<br> $navn er pensjonist.";
                        break;
                }
            }
        ?>
    </body>
</html>