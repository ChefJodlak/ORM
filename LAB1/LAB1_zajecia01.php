<?php
class Osoba
{
    private $_plec;
    private $_imie;
    private $_nazwisko;
    public function __construct($imie, $nazwisko)
    {
       $this->ustawImie($imie);
       $this->ustawNazwisko($nazwisko);
    }
    public function pobierzPlec()
    {
        return $this->_plec;
    }
    public function pobierzImie()
    {
        return $this->_imie;
    }
    public function pobierzNazwisko()
    {
        return $this->_nazwisko;
    }
    public function ustawPlec($plec)
    {
        $this->_plec = $plec;
    }
    public function ustawImie($imie)
    {
        $this->_imie = $imie;
    }
    public function ustawNazwisko($nazwisko)
    {
        $this->_nazwisko = $nazwisko;
    }
}

class Mezczyzna extends Osoba
{
    public function __construct($imie, $nazwisko)
    {
        parent::__construct($imie, $nazwisko);
        $this->ustawPlec('M');
    }
}

$mezczyzna = new Mezczyzna('Adam', 'Nowak');



$osoba = new Osoba('Jan', 'Kowalski');

echo $osoba->pobierzImie() . ' ' . $osoba->pobierzNazwisko();
echo '<BR>' . $mezczyzna->pobierzPlec();

?>

