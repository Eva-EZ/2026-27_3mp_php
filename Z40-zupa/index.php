<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z40-zupa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Z40-zupa</h1>
    <h2>Autor: Eva Zaczkiewicz 3mp</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który pyta o nazwę zupy – jeśli zupa to „grzybowa” lub „grochowa” (niezależnie od wielkości użytych znaków) odpowiada, że lubi te zupę. W innym przypadku odpowiada, że nie lubi tej zupy wykorzystując w odpowiedzi jej nazwę np. Zupa pomidorowa – nie lubię tej zupy!!!</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="zupa">Wpisz nazwe zupy: <input type="text" id="zupa" name="zupa" required></label> <br>
        <input type="submit" value="Wyslij">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $zupa = $_POST['zupa'];

        $zupa = strtolower($zupa);

        if ($zupa == "grzybowa" || $zupa == "grochowa") {
            echo "Zupa $zupa - Lubie te zupke!";
        } else {
            $zupa_koncowy = strtolower($zupa);
            echo "Zupa " . $zupa_koncowy . " – nie lubię tej zupki!!!";
        }
    }
?>

