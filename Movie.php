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

?>