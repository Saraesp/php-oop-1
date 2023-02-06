<?php
    //DEFINIZIONE CLASSE
    class Movie {
        public $title;
        public $director;
        public $production_date;
        public $vote;
        public $stars;
        public $generi;

        public function __construct($title, $director, $production_date, $generi){

            $this->title = $title;
            $this->director = $director;
            $this->production_date = $production_date;
            $this->generi = $generi;

        }

        public function getMovies(){
            return $this->production_date." - ".$this->director." - ".$this->generi_string_print();
        }

        public function setVoteFilm($stars) {
            if($stars > 3){
                $this->vote = 'Questo film ha ottenuto più di 3 stelle';
            }
        }

        public function getVoteFilm(){
            return $this->vote;
        }

        public function setTitle(){
            $this->title =$_title;
        }

        public function getTitle(){
            return $this->title;
        }

        public function generi_string_print(){
             
            $generi = $this->generi;
            $generi_string = '';

            foreach($generi as $genere){
                $generi_string .= $genere->name." ";
            }

            return $generi_string;
        }

    }

    class Genre {

        public $name;

        function __construct($_name){
            $this->name = $_name;
        }
    }
  

    // echo "<pre>";
    // var_dump($movie_1);
    // echo "</br>";

    // $movie_2->title = 'Harry Potter e la pietra filosofale';
    // $movie_2->director = 'David Heyman';
    // $movie_2->production_date = '2005-09-24';
    // $movie_2->language = 'English';



?>

<?php 

        $azione = new Genre('Azione');
        $fantascienza = new Genre('Fantascienza');

        $generi = [
                $azione,
                $fantascienza
            ];

        $inception = new Movie('Inception', 'Christopher Nolan', '2010-11-18', $generi);

        $movies = [
            $inception,
        ];

        // $movie_1->stars = 3;
        // $movie_2->stars = 4.5;

        // $movie_1->setVoteFilm($movie_1->stars);
        // echo "<br>".$movie_1->getVoteFilm();

        // $movie_2->setVoteFilm($movie_2->stars);
        // echo "<br>".$movie_2->getVoteFilm();
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
                    <?php foreach($movies as $movie) { ?>
                        <div class="col-12 col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="./image/inception_image.jpg" alt="">
                                <div class="card-body">
                                    <h4><?php echo $movie->getTitle(); ?></h4>
                                    <p><?php echo $movie->getMovies(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>