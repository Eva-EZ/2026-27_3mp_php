<?php
if (isset($_POST['komentarz'])) {
    $tekst = substr($_POST['komentarz'], 0, 269);
    $tekst = strip_tags($tekst) . "\n";

    if (!$op = fopen('opinie.txt', 'a')) {
        echo "Błąd!. Nie można otworzyć pliku opinie.txt";
    } else{
        if (fwrite($op, $tekst) === false) {
            echo "Dodanie komentarza nie powiodło się";
        }
    }
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T80 - komentarze do pliku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <form action="index.php" method="post">
        <p><b>Dodaj swój komentarz na temat pokémonow 4 generacji: </b><br>(Maksymalnie 269 znaków)</p>
        <label>
            <textarea name="komentarz" rows="7" cols="69" wrap="soft"></textarea>
        </label><br>
        <input type="submit" value="Wyślij">

</form>
</div>
<b>Dodane opinie:</b>
<div>
    <?php
    $opinie = '';
    if (file_exists('./opinie.txt')) {
        $opinie =file_get_contents('./opinie.txt');
        $opinie = nl2br($opinie);
    }

if ($opinie != '') {
    echo $opinie;
} else {
    echo "Brak opinii na ten temat.";
}
?>
</div>
</body>
</html>

