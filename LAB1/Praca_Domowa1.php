<?php
global $samochody;
$samochody = [];
class Samochod
{
    private $marka;
    private $model;
    private $silnik;
    private $cena;
    private $waga;
    private $rokprodukcji;
    public function __construct($marka, $model, $silnik, $cena, $waga, $rokprodukcji)
    {
        $this->ustawMarke($marka);
        $this->ustawModel($model);
        $this->ustawSilnik($silnik);
        $this->ustawCene($cena);
        $this->ustawWage($waga);
        $this->ustawRokProdukcji($rokprodukcji);
    }
    public function ustawMarke($marka){
        $this->marka = $marka;
    }
    public function ustawModel($model){
        $this->model = $model;
    }
    public function ustawSilnik($silnik){
        $this->silnik = $silnik;
    }
    public function ustawCene($cena){
        $this->cena = $cena;
    }
    public function ustawWage($waga){
        $this->waga = $waga;
    }
    public function ustawRokProdukcji($rokprodukcji){
        $this->rokprodukcji = $rokprodukcji;
    }

    public function pobierzMarke()
    {
    return $this->marka;
    }
    public function pobierzModel()
    {
        return $this->model;
    }
    public function pobierzSilnik()
    {
        return $this->silnik;
    }
    public function pobierzCene()
    {
        return $this->cena;
    }
    public function pobierzWage()
    {
        return $this->waga;
    }
    public function pobierzRokProdukcji()
    {
        return $this->rokprodukcji;
    }
    public function zapisz()
    {
        $array = array("marka" => $this->marka, "model" => $this->model, "silnik" => $this->silnik, "cena" => $this->cena,
            "waga" => $this->waga, "rokprodukcji" => $this->rokprodukcji);
        array_push($GLOBALS['samochody'],$array);
    }
}
if(isset($_POST['zapisz'])) {
    $samochod = new Samochod($_POST['marka'], $_POST['model'], $_POST['silnik'], $_POST['cena'], $_POST['waga'],
        $_POST['rokprodukcji']);
    $samochod->zapisz();

    echo"<p>Dodano samochód.</p>";
    print_r($samochody);
}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<form method="post" action="Praca_Domowa1.php">
    Marka:
    <input type="text" name="marka" />
    <br/>
    Model:
    <input type="text" name="model" />
    <br/>
    Silnik:
    <input type="text" name="silnik" />
    <br/>
    Cena:
    <input type="number" name="cena" />
    <br/>
    Waga:
    <input type="number" name="waga" />
    <br/>
    Rok Produkcji:
    <input type="number" name="rokprodukcji" />
    <br/>
    <br/>

    <input type="submit" name="zapisz" value="Zapisz" />
</form>
</body>
</html>