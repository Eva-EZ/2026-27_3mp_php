<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z62 - Ocena zachowania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Z62 - Ocena zachowania</h1>
<h2>Autor: Eva Zaczkiewicz 3mp</h2>
<p>Napisz program, który dla podanej wartości wyświetla ocenę wyrażoną słownie według następującego klucza: <br>
    0 – nieklasyfikowany <br>
    1,2,3 – poprawny <br>
    4,5 – dobry <br>
    6 – wyróżniający. <br>
    Na pozostałe wartości reaguje wyświetleniem komunikatu: „niewłaściwa liczba”. <br></p>
<form method="post">
    <label for="liczba">Podaj liczbę całkowitą:</label>
    <input type="number" name="liczba" id="liczba">
    <button type="submit">Wyslij</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['liczba'])) {
    $liczba = (int) $_POST['liczba'];

    switch ($liczba) {
        case 0:
            echo "<p>Ocena: <strong>nieklasyfikowany</strong></p>";
            break;
        case 1:
        case 2:
        case 3:
            echo "<p>Ocena: <strong>poprawny</strong></p>";
            break;
        case 4:
        case 5:
            echo "<p>Ocena: <strong>dobry</strong></p>";
            break;
        case 6:
            echo "<p>Ocena: <strong>wyróżniający</strong></p>";
            break;
        default:
            echo "<p><strong>niewłaściwa liczba</strong></p>";
            break;
    }
}
?>
</body>
</html>