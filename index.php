<?php

    class Movie {
        public $title;
        public $director;
        public $production_date;
        public $language;

    }

    $movie_1 = new Movie();
    $movie_1->title = 'Inception';
    $movie_1->director = 'Christopher Nolan';
    $movie_1->production_date = '2010-09-24';
    $movie_1->language = 'English';


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
                    <?php echo var_dump($movie_1); ?>
                </pre>
            </div>
        </div>
    </div>
</body>
</html>