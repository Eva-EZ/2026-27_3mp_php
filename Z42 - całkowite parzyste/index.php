<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z42 - całkowite parzyste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Z42 - całkowite parzyste</h1>
    <h2>Autor: Eva Zaczkiewicz 3mp</h2>
    <hr>
</header>

<section>
    <p>Dane są dwie różne liczby całkowite.
        Napisz program który:
        sprawdza czy podane dwie liczby całkowite są parzyste i tylko w tym przypadku wypisuje większą z nich. W przypadku podania liczby nieparzystej wypisuje która to liczba lub liczby.<br>
        <b>Wejście</b> <br>
        Na wejściu dwie różne liczby całkowite.<br>
        <b>Wyjście</b> <br>
        Na wyjściu większa z nich jeśli obie są parzyste lub ta liczba lub liczby jeśli są nieparzyste.</p>

    <form method="post">
        <label for="a">Podaj a: <input type="number" id="a" name="a"></label><br>
        <label for="b">Podaj b: <input type="number" id="b" name="b"></label><br>
        <input type="submit" value="Wyslij">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = intval($_POST['a']);
        $b = intval($_POST['b']);

        echo "<hr>";
        echo "<p>Wynik:</p>";
        echo "a = $a<br>";
        echo "b = $b<br>";

        $aPar = ($a % 2 == 0);
        $bPar = ($b % 2 == 0);

        if ($aPar && $bPar) {
            $maks = max($a, $b);
            echo "Obie liczby są parzyste. Większa z nich to: <b>$maks</b>";
        } else {
            $wynik = [];
            if (!$aPar) {
                $wynik[] = $a;
            }
            if (!$bPar) {
                $wynik[] = $b;
            }

            echo "Występują liczby nieparzyste: <b>" . implode(", ", $wynik) . "</b>";
        }
    }
    ?>
</section>
</body>
</html>
