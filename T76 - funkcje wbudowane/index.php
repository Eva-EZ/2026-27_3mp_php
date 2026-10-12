<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T76 - funkcje wbudowane</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<header>
    <h1>T76 - funkcje wbudowane</h1>
    <h2>Autor: Eva Zaczkiewicz 3mp</h2>
</header>
<section>
    <h3>T761</h3>
    <?php
    function suma($tab){
        return $tab[0] + $tab[1];
    }
    for ($i = 1; $i <= 10; $i++) {
        $tab[$i] = rand(1,20);
    }
    echo "Tablica przed posortowaniem: ";
    foreach($tab as $tablica){
        echo "$tablica, ";
    }
    echo "<br>";
    echo "Tablica po posortowaniu: ";
    sort($tab);
    foreach($tab as $tablica){
        echo "$tablica, ";
    }
    echo "<br>";
    echo "Suma dwóch najmniejszych liczb: $tab[0] + $tab[1] = ".suma($tab);
    echo "<br>";
    ?>

    <h3>T762</h3>
    <?php

function liczba_Imion_Zenskich($imiona) {
    $licznik = 0;

    foreach ($imiona as $imie) {
        if (strtolower($imie) === 'kuba' || strtolower($imie) === 'barnaba') {
            continue;
        }

        if (str_ends_with(strtolower($imie), 'a')) {
            $licznik++;
        }
    }

    return $licznik;
}

$imiona = ['Bartek','Kasia', 'Kuba', 'Margareta', 'Barnaba', 'Ela', 'Marian', 'Mariola', 'Ania', 'Agata', 'Wiktor', 'Witold', 'Ola'];
foreach ($imiona as $imie) {
    echo "$imie, ";
}
echo "<br>";
echo "Liczba imion zenskich: ".liczba_Imion_Zenskich($imiona);

    ?>

    <h3>T763</h3>
    <?php
    function join_i_sort(array $tab1,array $tab2): array{
        $joined = array_merge($tab1, $tab2);
        sort($joined);
        return $joined;
    }

    $t1 = [2,4,6,9,1,5,6,2];
    $t2 = [420,95,43,252,69,234,23];
    foreach($t1 as $tab){
        echo "$tab, ";
    }
    echo "<br>";
    foreach($t2 as $tab){
        echo "$tab, ";
    }
    echo "<br>";
    echo "tablice po połączeniu i posortowaniu: ";
    $efekt = join_i_sort($t1, $t2);
    foreach($efekt as $tab){
        echo "$tab, ";
    }
    echo "<br>";
    ?>
    <h3>T764</h3>
    <?php


    function sprawdzDate($mm, $dd, $YY)
    {
        if (!checkdate($mm, $dd, $YY)) {
            echo "Błędna data";
            return;
        }

        $currentYear = (int)date('Y');
        $currentMonth = (int)date('m');
        $currentDay = (int)date('d');

        if ($YY < $currentYear) {
            echo "historia";
        } elseif ($YY == $currentYear) {
            if ($mm < $currentMonth) {
                echo "historia";
            } elseif ($mm == $currentMonth && $dd < $currentDay) {
                echo "historia";
            } else {
                echo "teraźniejszość lub przyszłość";
            }
        } else {
            echo "teraźniejszość lub przyszłość";
        }
    }

    echo "Data: 11,3,5000 to ";
    sprawdzDate(11,3,5000);
    echo "<br>";
    echo "Data: 2,29,500 to ";
    sprawdzDate(2,20,500);
    echo "<br>";
    echo "Data: 13,33,80 to ";
    sprawdzDate(13,33,80);
    echo "<br>";
    echo "Data: 10,12,80 to ";
    sprawdzDate(10,12,2026);
    echo "<br>";

    ?>
    <h3>T765</h3>
    <?php


    function wyswietlDate()
    {
        $miesiace = [
            1 => "styczeń",
            2 => "luty",
            3 => "marzec",
            4 => "kwiecień",
            5 => "maj",
            6 => "czerwiec",
            7 => "lipiec",
            8 => "sierpień",
            9 => "wrzesień",
            10 => "październik",
            11 => "listopad",
            12 => "grudzień"
        ];

        $data = getdate();
        $miesiac = $miesiace[$data['mon']];
        echo "$data[mday] $miesiac $data[year]";
}

    wyswietlDate(); // np. 12 październik 2026

    ?>
</section>
</div>
</body>
</html>