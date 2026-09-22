<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z59 - ocena procent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Z59 - ocena procent</h1>
    <h2>Autor: Eva Zaczkiewicz 3mp</h2>
    <hr>
</header>

<section>
    <p>Napisz program, który dla podanego wyniku procentowego testów studenckich wystawia ocenę według następującej zasady:<br>
        5 - 90% do 100% <br>
        4,5 - 80% do 89% <br>
        4 - 70% do 79% <br>
        3,5 - 60% do 69% <br>
        3 - 50% do 59% <br>
        2 - poniżej 50% <br><br>
    </p>

    <form method="post">
        <label for="wynik">Podaj wynik studenta(%): <input type="number" id="wynik" name="wynik"></label><br>
        <input type="submit" value="Wyslij">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['wynik'])) {
            $wynik = (float)$_POST['wynik'];

            if ($wynik >= 90 && $wynik <= 100) {
                $ocena = 5;
            }
            elseif ($wynik >= 80) {
                $ocena = 4.5;
            }
            elseif ($wynik >= 70) {
                $ocena = 4;
            }
            elseif ($wynik >= 60) {
                $ocena = 3.5;
            }
            elseif ($wynik >= 50) {
                $ocena = 3;
            }
            else{
                $ocena = 2;
            }

            echo "<p>Ocena studenta: <b>$ocena</b></p>";

        }
    }
    ?>
</section>
</body>
</html>