
<?php

    class Kontakt {
        protected $wartosc; 
    }
    
    class Email extends Kontakt {
        
        public function __construct($email){
            $this->wartosc = $email;
        }   
        
        public function getWartosc(){
            return $this->wartosc;
        }
        
    }
    
    class Telefon extends Kontakt {
        
        public function __construct($telefon){
            $this->wartosc  = $telefon;
        }
        
        public function getWartosc(){
            return $this->wartosc;
        }   
        
    }
    
    class Adres extends Kontakt {

        public function __construct($adres){
            $this->wartosc  = $adres;
        }
        
        public function getWartosc(){
            return $this->wartosc;
        }
        
    }
    
    class Osoba {
        
        private $imie;
        private $nazwisko;
        private $kontakty;


        public function __construct($imie,$nazwisko,$kontakty){
            $this->imie = $imie;
            $this->nazwisko = $nazwisko;
            $this->kontakty = $kontakty;
        }
        
        public function drukuj(){
            $tabelka = "
                <table border='1'>
                    <tr>
                        <td>Imie</td>
                        <td>".$this->imie."</td>
                    </tr>
                    <tr>
                        <td>Nazwsko</td>
                        <td>".$this->nazwisko."</td>
                    </tr>";
            
            foreach ($this->kontakty as $v){
                $tabelka .= "<tr><td>Kontakt</td><td>".$v->getWartosc()."</td></tr>";
            }
            
            $tabelka .= "</table>";
            
            echo $tabelka;
            
        }
        
    }
    
    $telefon = new Telefon('770646331');
    $adres = new Adres('Warszawa');
    $email = new Email('sada@assdad.com');
    
    $kontakty = [$telefon, $adres, $email];
    
    $Pawel = new Osoba('Rafal', 'Jodla', $kontakty);
    
    $Pawel->drukuj();

?>
