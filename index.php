<?php 

ini_set('display_errors', 1);

class Movie 
{
    public $titolo;
    public $genere;
    public $anno;
    public $lingua;
    public $durata;
    public $trama;
    public $voto;
    public $attori;
    public $regia;
    private $eta;

    public function __construct($_titolo, $_regia, $_anno) {
        $this->titolo = $_titolo;
        $this->regia = $_regia;
        $this->anno = $_anno;


        }

    public function setEtaFilm($anno)
    {
        $this->eta = 2021 - $anno;
    }

    public function getEtaFilm() 
    {
        return $this->eta;
    }
}

$film1 = new Movie('Grand Budapest Hotel', 'Wes Anderson', 2014);
$film1->genere = "Commedia";
$film1->lingua = "inglese";
$film1->durata = 99;
$film1->trama = "Trama film";
$film1->voto = 3.8;
$film1->attori = ["Ralph Fiennes", "Adrien Brody", "Edward Norton"];
$film1->setEtaFilm(2014);
var_dump($film1);




$film2 = new Movie('Birdman', 'Alejandro González Iñárritu', 2014);


$film2->genere = "Drammatico";
$film2->lingua = "inglese";
$film2->durata = 120;
$film2->trama = "Trama film";
$film2->voto = 3.6;
$film2->attori = ["Michael Keaton", "Emma Stone", "Edward Norton"];
$film2->setEtaFilm(2014);
var_dump($film2);

// echo $film1->getEtaFilm();
// echo "<br>";
// echo $film2->getEtaFilm();




