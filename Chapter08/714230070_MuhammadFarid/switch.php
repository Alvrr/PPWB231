<html>
    <head>
        <title>switch</title>
    </head>
    <body>
        <h2>Penggunaan kontrol switch</h2>
        <?php
        $angka_mutu=3;
        echo("angka mutu $angka_mutu<br>");
        switch($angka_mutu)
        {
            case 0: echo("Huruf Mutu E"); break;
            case 1: echo("Huruf Mutu D"); break;
            case 2: echo("Huruf Mutu C"); break;
            case 3: echo("Huruf Mutu B"); break;
            case 4: echo("Huruf Mutu A"); break;
            default: echo("Huruf Mutu tidak dikenali");     
        }
        ?>
    </body>
</html>