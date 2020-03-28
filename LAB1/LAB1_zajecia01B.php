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


class Kontakt //osoba
{

    private $_telefon;
    private $_email;
    private $_adres;
    public function __construct($telefon, $email, $adres)
    {
        $this->ustawTelefon($telefon);
        $this->ustawEmail($email);
        $this->ustawAdres($adres);
    }
    public function pobierzTelefon()
    {
        return $this->_telefon;
    }
    public function pobierzEmail()
    {
        return $this->_email;
    }
    public function pobierzAdres()
    {
        return $this->_adres;
    }
    public function ustawTelefon($telefon)
    {
        $this->_telefon = $telefon;
    }
    public function ustawEmail($email)
    {
        $this->_email = $email;
    }
    public function ustawAdres($adres)
    {
        $this->_adres = $adres;
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

$mezczyzna = new Mezczyzna('Adam', 'Roberts');
echo $mezczyzna->pobierzImie() . ' ' . $mezczyzna->pobierzNazwisko() . '<br>';
echo $mezczyzna->pobierzPlec() . '<BR>';

$osoba = new Osoba('Sebastian', 'Witkowski');

echo $osoba->pobierzImie() . ' ' . $osoba->pobierzNazwisko();
echo '<BR>' . $mezczyzna->pobierzPlec() . '<BR><BR>';


$kontakt = new Kontakt('800 123 123', 'sadadas@gmai.com', 'Poznan 00-777 ul. Warszawska 1');
echo $kontakt->pobierzTelefon().' '. $kontakt->pobierzEmail(). ' ' .$kontakt->pobierzAdres();
?>

