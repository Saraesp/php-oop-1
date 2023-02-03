<?php
    //DEFINIZIONE CLASSE
    class Movie {
        public $title;
        public $director;
        public $production_date;
        public $language;
        public $vote;
        public $stars;

        function __construct($_title, $_director){
            $this->title = $_title;
            $this->director = $_director;
        }

        public function setVoteFilm($stars) {
            if($stars > 3){
                $this->vote = 'Questo film ha ottenuto più di 3 stelle';
            }
        }

        public function getVoteFilm(){
            return $this->vote;
        }

    }

    //CREAZIONE OGGETTO
    $movie_1 = new Movie('Inception', 'Christopher Nolan');
    $movie_2 = new Movie('Harry Potter e la pietra filosofale', 'David Heyman');

    //ASSEGNAZIONE VALORI
    $movie_1->title = 'Inception';
    $movie_1->director = 'Christopher Nolan';
    $movie_1->production_date = '2010-11-18';
    $movie_1->language = 'English';


    $movie_2->title = 'Harry Potter e la pietra filosofale';
    $movie_2->director = 'David Heyman';
    $movie_2->production_date = '2005-09-24';
    $movie_2->language = 'English';

    //COSTRUTTORE
    $title_3 = 'Cado dalle Nubi';
    $director_3 = 'Gennaro Nunziante';
    $title_4 = 'Southpaw';
    $director_4 = 'Antoine Fuqua';

    $movie_3 = new Movie($title_3, $director_4);

    var_dump($movie_3);

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