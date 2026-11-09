<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T83 - zaprojektuj własne trampki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Formularz konkursu „Podrasuj swoje buty!”</h1>
<h2>Autor: Eva Zaczkiewicz 3mp</h2>
<p>Chcesz zamienić swoje stare trampki na nową parę... Napisz nam, dlaczego:</p>

<form action="" method="POST">

    <h3>Podstawowe dane</h3>
    Imię i nazwisko: <input type="text" name="imie"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    Telephone: <input type="text" name="telefon"><br><br>

    Moje buty są TAKIE stare...<br>
    <textarea name="dlaczego" rows="4" cols="50" placeholder="nie wiecej niz 300 znakow"></textarea><br><br>

    <h3>Zaprojektuj własne trampki:</h3>

    <b>Kolor (wybierz jeden):</b><br>
    <input type="radio" name="kolor" value="czerwony"> czerwony<br>
    <input type="radio" name="kolor" value="niebieski"> niebieski<br>
    <input type="radio" name="kolor" value="czarny"> czarny<br>
    <input type="radio" name="kolor" value="srebrny"> srebrny<br><br>

    <b>Opcje (możesz wybrać kilka):</b><br>
    <input type="checkbox" name="opcja1" value="Błyszczące sznurówki"> Błyszczące sznurówki<br>
    <input type="checkbox" name="opcja2" value="Metalowe logo"> Metalowe logo<br>
    <input type="checkbox" name="opcja3" value="Świecąca podeszwa"> Świecąca podeszwa<br>
    <input type="checkbox" name="opcja4" value="Odtwarzacz MP3"> Odtwarzacz MP3<br><br>

    <b>Rozmiar zgodny ze standardowymi numerami butów:</b>
    <select name="rozmiar">
        <option value="35">35</option>
        <option value="36">36</option>
        <option value="37" >37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
    </select>
    <br><br>

    <input type="submit" name="wyslij" value="Podrasuj swoje buty!">
    <input type="reset" value="Resetuj">

</form>

<hr>

<?php
if (isset($_POST['wyslij'])) {

    $imie = $_POST['imie'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $dlaczego = $_POST['dlaczego'];

    $kolor = $_POST['kolor'];

    $dodatki = "";
    if (isset($_POST['opcja1'])) { $dodatki .= $_POST['opcja1'] . ", "; }
    if (isset($_POST['opcja2'])) { $dodatki .= $_POST['opcja2'] . ", "; }
    if (isset($_POST['opcja3'])) { $dodatki .= $_POST['opcja3'] . ", "; }
    if (isset($_POST['opcja4'])) { $dodatki .= $_POST['opcja4'] . ", "; }

    $rozmiar = $_POST['rozmiar'];

    echo "<h2>Odebrane dane z formularza:</h2>";
    echo "<b>Imię i nazwisko:</b> " . $imie . "<br>";
    echo "<b>E-mail:</b> " . $email . "<br>";
    echo "<b>Telefon:</b> " . $telefon . "<br>";
    echo "<b>Dlaczego stare:</b> " . $dlaczego . "<br>";
    echo "<b>Wybrany kolor:</b> " . $kolor . "<br>";
    echo "<b>Wybrane dodatki:</b> " . ($dodatki ? rtrim($dodatki, ", ") : "Brak") . "<br>";
    echo "<b>Rozmiar buta:</b> " . $rozmiar . "<br>";
}
?>

</body>
</html>
