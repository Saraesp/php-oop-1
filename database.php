<?php 
        include __DIR__ . '/Movie.php';
        include __DIR__ . '/Genre.php';


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