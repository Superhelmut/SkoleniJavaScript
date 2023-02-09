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
    $jmeno = "Petr";
    $prijmeni = "Novák";

    echo $jmeno." ".$prijmeni;

    var_dump(3 + "7"); // 10
    ?>

    <script>
    // operator modulo - vraci zbytek po celociselnem deleni
    let zbytek = 7 % 3; // zbyde 1
    console.log(zbytek);

    let vek = 60;
    // zvednout vek o 1
    vek = vek + 1;
    vek++;
    console.log(vek); // 62

    vek += 3; // zvysi o 3
    console.log(vek); // 65

    // operator porovnani
    let jeMi40 = vek == 40;
    console.log(jeMi40); // false

    // operator nerovna se
    let neniMi40 = vek != 40;
    console.log(neniMi40); // true

    console.log("1234" == 1234); // true
    console.log("1234" === 1234); // false - lisi se datove typy

    // logicke operatory
    vek = 40;
    let pohlavi = "žena";
    // logicky AND (obe hodnoty museji byt true)
    let dospelyMuz = vek >= 18 && pohlavi == "muž";
    console.log(dospelyMuz);
    // logicky OR (alespon jedna hodnota musi byt true)
    let muzNeboZena = pohlavi == "muž" || pohlavi == "žena";
    console.log(muzNeboZena);
    // negace
    let jsemDospely = vek >= 18;
    let nejsemDospely = !jsemDospely;
    console.log(nejsemDospely);

    // operator pro lepeni textu
    let jmeno = "Petr";
    let prijmeni = "Novák";
    console.log(jmeno + " " + prijmeni);

    console.log(3 + "7" + 8 + 2); // 37

    let cislo = "7";
    // prevedeni textu na cislo pomoci unarniho operatoru +
    console.log(+cislo + 1);
    console.log(1 + +cislo);

    </script>
</body>
</html>