<html>
    <body>
        <h2>Velkommen til Norge.no</h2>
        <?php
        echo "<p>Hovedstaden i Norge er: ";
        echo "<strong>Oslo</strong>";
        echo "<br />";
        ?>

        I dag er det den <?php echo date("d.m.Y");?>
        </p>
        <p>
        Klokken er nå: <?php 
        date_default_timezone_set("Europe/Oslo");
        echo date("H.i.s"); ?>
        </p>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor ligula, imperdiet at massa id, semper porttitor mi. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            Nullam tempus turpis sem, ut mattis libero placerat nec. Ut vitae lorem porttitor, pulvinar nibh vitae, accumsan nulla. 
            Nulla et nisi accumsan ipsum aliquet fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer congue consequat maximus. 
            Mauris tellus lectus, rutrum bibendum risus eget, laoreet dapibus leo. Curabitur tristique consectetur magna non facilisis. 
            Donec volutpat facilisis tempor. Fusce hendrerit rhoncus laoreet. 
            In ut tellus eget ligula hendrerit dapibus. Aliquam tempor neque vitae sodales dignissim. Nunc a dui posuere neque pulvinar fringilla maximus ac mauris.
        </p>

        <h3 style="color:blue;">Dagens dato er 22.08.2020</h3>

        <p>
            Cras imperdiet eros magna, nec tincidunt tortor condimentum non. 
            Donec ut molestie nunc. Morbi vitae vestibulum nibh, id tempor nisi. 
            Mauris gravida auctor ante sit amet euismod. 
            Phasellus ultrices tortor et leo dapibus, non auctor erat consequat.
            Suspendisse purus nulla, mattis id fringilla at, euismod quis risus. Donec vehicula nisl vel luctus interdum.
        </p>

        <p style="text-align:center;">Dagens dato er 22.08.2020</p>

        <p>
        Suspendisse ullamcorper, dolor et laoreet vulputate, sem lorem iaculis nibh, sed vehicula nulla nisi ut urna. 
        Nullam ac nulla aliquam, efficitur lectus ac, pretium mi. 
        Aliquam erat volutpat. 
        Mauris at orci vitae nulla aliquam congue vel quis lectus. 
        In eget dui lacinia, lacinia leo a, blandit ligula. 
        Nullam eget posuere ex. Sed volutpat quam nec libero congue, et vulputate nulla consequat. Integer mauris lorem, suscipit vel ligula ut, tristique tincidunt mi. 
        Vestibulum pharetra quam in nunc pretium suscipit. Etiam at ante cursus, maximus eros ac, pretium nulla. 
        Sed libero risus, tincidunt et tempus eu, ullamcorper a sem. 
        Praesent posuere ex sed aliquet tincidunt. 
        Maecenas placerat neque neque, id finibus arcu tempor quis. Donec sit amet erat et purus gravida luctus.
        </p>

        <p style="font-size:large;">Dagens dato er 22.08.2020</p>
    </body>
</html>