<?php
        include __DIR__ . '/database.php';
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