<!DOCTYPE html>
<?php 
$tall = 4400;
$timer = (int)($tall / 3600);
$minutter = (int)(($tall / 60) % 60);
$sekunder = (int)($tall % 60);
?>
<html>
    <head>
        <title>
            Modul 2 - Oppgave 3
        </title>
    </head>
    <body>
        <p><?php echo $tall ?> sekunder tilsvarer <?php echo "$timer timer, $minutter minutter og $sekunder sekunder." ?> </p>
    </body>
</html>