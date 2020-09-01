<!DOCTYPE html>
<?php
    $fornavn = "Ola";
    $etternavn = "Nordmann";
    $adresse = "Karl Johans gate 1, 0159 Oslo";
    $mobilnummer = 97973712;
    $epost = "olanordmann@gmail.com";
    $fodselsdato = "13.04.1991";
    $kjonn = "Mann";
    $interesser = "Programmering, trening";
    $kursaktiviter = "Ingen foreløpig";
    $medlemsdato = "01.08.2020";
    $kontingentstatus = "Betalt";
?>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
            }
        </style>
        <title>
            Modul 2 - Oppgave 5
        </title>
    </head>
    <body>
        <h2>
            Informasjon om medlem: <?php echo $fornavn . " " . $etternavn?>
        </h2>
        <table style="width: auto;">
            <thead>
              <tr>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Adresse</th>
                <th>Mobilnummer</th>
                <th>E-post</th>
                <th>Fødselsdato</th>
                <th>Kjønn</th>
                <th>Interesser</th>
                <th>Kursaktiviteter</th>
                <th>Medlemsdato</th>
                <th>Kontingentstatus</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $fornavn ?></td>
                <td><?php echo $etternavn ?></td>
                <td><?php echo $adresse ?></td>
                <td><?php echo $mobilnummer ?></td>
                <td><?php echo $epost ?></td>
                <td><?php echo $fodselsdato ?></td>
                <td><?php echo $kjonn ?></td>
                <td><?php echo $interesser ?></td>
                <td><?php echo $kursaktiviter ?></td>
                <td><?php echo $medlemsdato ?></td>
                <td><?php echo $kontingentstatus ?></td>
              </tr>
            </tbody>
            </table>
    </body>
</html>