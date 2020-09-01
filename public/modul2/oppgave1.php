<?php 
$alder = 25;
$navn = "Jørgen";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <title>Modul 2 - Oppgave 1</title>
    </head>
    <body>
        <h3>
            Tabell:
        </h3>
        <table style:"width=50%">
            <tr>
                <th>Navn</th>
                <th>Alder</th>
            </tr>
            <tr>
                <td> <?php echo $navn ?> </td>
                <td> <?php echo $alder ?> </td>
            </tr>
        </table>
        <br>
        <h3>
            Nummerert liste:
        </h3>
        <ol>
            <li> <?php echo $navn ?> </li>
            <li> <?php echo $alder ?> </li>
        </ol>
        <br>
        <h3>
            Punktmerket liste:
        </h3>
        <ul>
            <li> <?php echo $navn ?> </li>
            <li> <?php echo $alder ?> </li>
        </ul>
        <br>
        <h3>
            Paragraf:
        </h3>
        <p>
            Navnet på personen er <?php echo $navn ?> og han er <?php echo $alder ?> år gammel.
        </p>
    </body>
</html>