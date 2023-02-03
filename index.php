<?php
    //DEFINIZIONE CLASSE
    class Movie {
        public $title;
        public $director;
        public $production_date;
        public $language;
        public $vote;
        public $stars;
        public $genere;

        public function setVoteFilm($stars) {
            if($stars > 3){
                $this->vote = 'Questo film ha ottenuto più di 3 stelle';
            }
        }

        public function getVoteFilm(){
            return $this->vote;
        }

    }

    class Genre {
        public $animazione;
        public $biografia;
        public $comico;
        public $avventura;

        function __construct($_animazione, $_biografia, $_comico, $_avventura){
            $this->animazione = $_animazione;
            $this->biografia = $_biografia;
            $this->comico = $_comico;
            $this->avventura = $_avventura;
        }
    }

    //CREAZIONE OGGETTO
    $movie_1 = new Movie('Inception', 'Christopher Nolan');
    // $movie_2 = new Movie('Harry Potter e la pietra filosofale', 'David Heyman');

    $genere_1 = new Genre ('Animazione', 'Biografia','Comico', 'Avventura' );
    $genere_2 = new Genre ('Drammatico', 'Storico','Fantascienza', 'Azione' );

    $movie_1->genere = [$genere_1, $genere_2];

    echo "<pre>";
    var_dump($movie_1);
    echo "</br>";

    //ASSEGNAZIONE VALORI
    $movie_1->title = 'Inception';
    $movie_1->director = 'Christopher Nolan';
    $movie_1->production_date = '2010-11-18';
    $movie_1->language = 'English';


    // $movie_2->title = 'Harry Potter e la pietra filosofale';
    // $movie_2->director = 'David Heyman';
    // $movie_2->production_date = '2005-09-24';
    // $movie_2->language = 'English';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <pre>
                    <?php 
                        $movie_1->stars = 3;
                        $movie_2->stars = 4.5;

                        $movie_1->setVoteFilm($movie_1->stars);
                        echo "<br>".$movie_1->getVoteFilm();

                        $movie_2->setVoteFilm($movie_2->stars);
                        echo "<br>".$movie_2->getVoteFilm();
                    ?>
                </pre>
            </div>
        </div>
    </div>
</body>
</html>