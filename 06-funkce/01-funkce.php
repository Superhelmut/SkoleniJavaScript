<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //echo strtoupper("praha");

    //echo round(3.14, 1); // 3.1

    echo strlen("praha");
    ?>

    <script>
        const mesto = "praha";
        const velkeMesto = mesto.toUpperCase();
        //alert(velkeMesto);

        const cislo = 3.14;
        const zaokrouhleneCislo = Math.round(cislo * 10) / 10;
        //alert(zaokrouhleneCislo);

        alert(mesto.length);
    </script>
</body>

</html>