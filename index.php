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
// var_dump($film1);




$film2 = new Movie('Birdman', 'Alejandro González Iñárritu', 2014);


$film2->genere = "Drammatico";
$film2->lingua = "inglese";
$film2->durata = 120;
$film2->trama = "Trama film";
$film2->voto = 3.6;
$film2->attori = ["Michael Keaton", "Emma Stone", "Edward Norton"];
$film2->setEtaFilm(2014);
// var_dump($film2);

// echo $film1->getEtaFilm();
// echo "<br>";
// echo $film2->getEtaFilm();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
    <div>
        <h1>
            <?php echo $film1->titolo ?>
        </h1>
        <p>
            <?php echo $film1->regia ?>
        </p>
        <p>
            <?php echo $film1->anno ?>
        </p>
        <p>
            Genere: <?php echo $film1->genere ?>
        </p>
        <p>
            Durata: <?php echo $film1->durata ?> min
        </p>
        <p>
            Lingua: <?php echo $film1->lingua ?>
        </p>
        <p>
            Trama: <?php echo $film1->trama ?>
        </p>
        <p>
            Attori: <?php foreach($film1->attori as $attore) {
                    echo $attore .'  ';
                }?>
        </p>
        <p>
            Voto: <?php echo $film1->voto ?>
        </p>
        <p>
            Il film è uscito <?php echo $film1->getEtaFilm() ?> anni fa
        </p>
    </div>
    <hr>
    <div>
        <h1>
            <?php echo $film2->titolo ?>
        </h1>
        <p>
            <?php echo $film2->regia ?>
        </p>
        <p>
            <?php echo $film2->anno ?>
        </p>
        <p>
            Genere: <?php echo $film2->genere ?>
        </p>
        <p>
            Durata: <?php echo $film2->durata ?> min
        </p>
        <p>
            Lingua: <?php echo $film2->lingua ?>
        </p>
        <p>
            Trama: <?php echo $film2->trama ?>
        </p>
        <p>
            Attori: <?php foreach($film2->attori as $attore) {
                    echo $attore .'  ';
                }?>
        </p>
        <p>
            Voto: <?php echo $film2->voto ?>
        </p>
        <p>
            Il film è uscito <?php echo $film2->getEtaFilm() ?> anni fa
        </p>
    </div>
</body>
</html>


