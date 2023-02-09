<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Název produktu: <input type="text" name="" id="nazev">
    <button id="kolikStoji">Kolik stojí?</button>

    <script>
        const nazev = document.getElementById("nazev");
        const kolikStoji = document.getElementById("kolikStoji");

        kolikStoji.addEventListener("click", (udalost) => {
            const nazevProduktu = nazev.value;

            const ajax = new XMLHttpRequest();
            ajax.open("GET", "05-cena-produktu.php?nazevProduktu=" + encodeURIComponent(nazevProduktu));
            ajax.addEventListener("readystatechange", (udalost) => {
                if (ajax.readyState == 4)
                {
                    const odpoved = ajax.responseText;
                    const produkt = JSON.parse(odpoved);
                    console.log(produkt);
                    if (produkt == false)
                    {
                        alert("Produkt nebyl nalezen");
                    }
                    else
                    {
                        alert(`Cena produktu je ${produkt.cena}`);
                    }
                }
            });
            ajax.send();
        });
    </script>
</body>
</html>