<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z65 - Równanie kwadratowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Z65 - Równanie kwadratowe</h1>
<h2>Autor: Eva Zaczkiewicz 3mp</h2>
<form method="post">
    <label for="a">Podaj A:</label>
    <input type="number" name="a" id="a" >
    <br><br>

    <label for="b">Podaj B:</label>
    <input type="number" name="b" id="b" >
    <br><br>

    <label for="c">Podaj C:</label>
    <input type="number" name="c" id="c" >
    <br><br>

    <button type="submit">Wyslij</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST['a'])
    && isset($_POST['b'])
    && isset($_POST['c'])) {

    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $c = floatval($_POST['c']);


    if ($a == 0) {
        echo "<p>To <strong>nie jest równanie kwadratowe</strong> (A = 0).</p>";

        if ($b != 0) {
            $x = -$c / $b;
            echo "<p>Równanie liniowe ma jeden pierwiastek: <strong>x = " . $x . "</strong></p>";
        } else {
            if ($c == 0) {
                echo "<p>Równanie ma <strong>nieskończenie wiele rozwiązań</strong> (0 = 0).</p>";
            } else {
                echo "<p>Równanie <strong>nie ma rozwiązań</strong> (" . $c . " ≠ 0).</p>";
            }
        }

    } else {
        $delta = $b * $b - 4 * $a * $c;

        echo "<p>Równanie kwadratowe: <strong>" . $a . "x² + " . $b . "x + " . $c . " = 0</strong></p>";
        echo "<p>Delta (Δ) = <strong>" . $delta . "</strong></p>";

        if ($delta < 0) {
            echo "<p>Równanie <strong>nie ma rozwiązań</strong> w zbiorze liczb rzeczywistych (Δ < 0).</p>";

        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "<p>Równanie ma <strong>jeden pierwiastek podwójny</strong>:</p>";
            echo "<p><strong>x = " . $x . "</strong></p>";

        } else {
            $x1 = (-$b - sqrt($delta)) / (2 * $a);
            $x2 = (-$b + sqrt($delta)) / (2 * $a);
            echo "<p>Równanie ma <strong>dwa pierwiastki</strong>:</p>";
            echo "<p><strong>x₁ = " . $x1 . "</strong></p>";
            echo "<p><strong>x₂ = " . $x2 . "</strong></p>";
        }
    }
}
?>
</body>
</html>