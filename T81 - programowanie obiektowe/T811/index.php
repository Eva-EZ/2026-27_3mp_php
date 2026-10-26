<?php
class osoba
{
    public $id, $nazwisko, $imie, $wiek;
    function wpiszNazwisko($arg1)
    {
        $this->nazwisko=$arg1;
    }
    function pobierzNazwisko()
    {
        return $this->nazwisko;
    }
    function wpiszImie($arg2)
    {
        $this->imie=$arg2;
    }
    function pobierzImie()
    {
        return $this ->imie;
    }
    function wpiszId($arg3)
    {
        $this->id=$arg3;
    }
    function pobierzId()
    {
        return $this->id;
    }

    function wpiszWiek($arg4){
        $this->wiek=$arg4;
    }

    function pobierzWiek(){
        return $this ->wiek;
    }
}

$postac1= new osoba();
$postac2= new osoba();
$postac1 ->nazwisko='Kowalski';
$postac1->imie='Jan';
$postac1->wiek=27;
$postac1->id=1;

$postac2->wpiszNazwisko('Nowak');
$postac2->wpiszImie('Adam');
$postac2->wpiszWiek(47);
$postac2->wpiszId(2);

echo $postac1->nazwisko." ".$postac1->imie.". Wiek: ".$postac1->wiek;
echo "<br>";
echo $postac2->pobierzNazwisko()." ".$postac2->pobierzImie().". Wiek: ".$postac2->pobierzWiek();
