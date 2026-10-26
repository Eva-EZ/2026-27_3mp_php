<?php
/*
Zdefiniuj klasę czołg. Czołg powinien mieć następujące właściwości:

nazwa,
kolor,
ilość amunicji
oraz metody:

info() – wyświetlająca informację o czołgu,
pomaluj() – zmieniająca kolor czołgu,
załaduj() – zwiększająca ilość amunicji,
strzelaj() – wyświetla komunikat i zmniejsza ilość amunicji o 1 (w wariancie rozwiniętym należy uniemożliwić wykonanie strzału jeśli nie ma amunicji).
Utwórz obiekt klasy czołg i przetestuj działanie metod.
*/

class Czolg{
    public $nazwa, $kolor, $ilosc_ammo;

    function wpiszDane($arg1, $arg2, $arg3){
        $this->nazwa = $arg1;
        $this->kolor = $arg2;
        $this->ilosc_ammo = $arg3;
    }
    function info()
    {
        echo "Czolg o kolorze ".$this->kolor." nazywa sie ".$this->nazwa." ma ".$this->ilosc_ammo." ammo.<br>";
    }

    function pomaluj($nowyKolor)
    {
        $this->kolor = $nowyKolor;
        echo "Zmieniono kolor czołgu na ".$nowyKolor."<br>";
    }
    function zaladuj()
    {
        $this->ilosc_ammo = $this->ilosc_ammo + 5;
        echo "Zwiększono ilosc ammo o 5<br>";
    }

    function strzelaj()
    {
        if ($this->ilosc_ammo > 0)
        {
            echo "PEEW!";
            $this->ilosc_ammo = $this->ilosc_ammo - 1;
        }
        else
        {
            echo "W czołgu nie ma ammo, załaduj go!<br>";
        }
    }
}

$Misiek = new Czolg();
$Misiek->wpiszDane('Misiek','Niebieski', 0 );
$Misiek->info();
$Misiek->pomaluj('Srebrny');
$Misiek->strzelaj();
$Misiek->zaladuj();
$Misiek->strzelaj();
