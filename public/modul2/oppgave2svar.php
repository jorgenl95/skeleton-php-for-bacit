<!DOCTYPE html>
<?php 
$tall1 = $_POST['tall1'];
$tall2 = $_POST['tall2'];
$operator = $_POST['operator'];
?>
<html>
    <head>
        <title>
            Modul 2 - Resultat Kalkulator
        </title>
    </head>
    <body>
        <p>Resultatet av kalkulasjonen er: </p>
        <?php 
        switch($operator)
        {
             case "+":
                echo $tall1 + $tall2;
             break;
             case "-":
                echo $tall1 - $tall2;
             break;
             case "avg":
                echo ($tall1 + $tall2) / 2;
        }
        ?>
    </body>
</html>