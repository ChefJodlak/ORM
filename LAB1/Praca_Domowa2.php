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



class Samochody{
    private $samochody;
    public function __construct($samochody)
    {
        $this->pobierzWszystkie($samochody);
    }
    public function pobierzWszystkie($samochody){
        $samochodyObjects = [];

        foreach($samochody as $value){
            $samochod = new Samochod($value['marka'], $value['model'], $value['silnik'], $value['cena'], $value['waga'],
                $value['rokprodukcji']);
            array_push($samochodyObjects, ["samochod" => $samochod]);
        }

        $this->samochody = $samochodyObjects;
    }
    public function pobierzSamochody(){
        return $this->samochody;
    }
    public function stworzTabele(){
        foreach($this->samochody as $klucz => $array){
            $samochod = $array['samochod'];
            echo"<tr>
                    <td>".$samochod->pobierzMarke()."</td>
                    <td>".$samochod->pobierzModel()."</td>
                    <td>".$samochod->pobierzSilnik()."</td>
                    <td>".$samochod->pobierzCene()."</td>
                    <td>".$samochod->pobierzWage()."</td>
                    <td>".$samochod->pobierzRokProdukcji()."</td>
                </tr>";
        }
    }
}?>

<?php
$tablica = Array (Array ( "marka" => "Porsche", "model" => "911 Turbo s", "silnik" => "3,8l", "cena" => 680597, "waga" => 1600, "rokprodukcji" => 2018),
    Array ( "marka" => "Volkswagen ", "model" => "Passat", "silnik" => "2.0", "cena" => 150000, "waga" => 1600, "rokprodukcji" => 2020));
// print_r($tablica);
$samochody = new Samochody($tablica);
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<style>
    table, tr, td {
        border: 1px solid black;
        text-align: center;
    }
</style>
<body>
<table>
    <tbody>
    <tr>
        <th>Marka</th>
        <th>Model</th>
        <th>Silnik</th>
        <th>Cena</th>
        <th>Waga</th>
        <th>Rok Produkcji</th>
    </tr>
    <?php $samochody->stworzTabele()?>
    </tbody>
</table>
</body>
</html>

