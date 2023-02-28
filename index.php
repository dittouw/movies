<?php
//  lister les films 
require './inc/fonctions.php';
require './inc/pdo.php';

$sqlRequete = "SELECT * FROM movies_full WHERE title like '%Star%' LIMIT 30";

$resultat = $conn->prepare("SELECT * FROM movies_full where title like '%Star%'");
$resultat->execute();
$films = $resultat->fetchAll();

// dbug($films);
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titre</title>
    </head>

    <body>
<?php foreach ($films as $key => $value) { ?>
        <div id="oui">
            <div>
                <hr>
                Title : <?= $value['title'] ?>

            </div>
            <div>
                Genre : <?= $value['genres'] ?>
            </div>
            <div>
                Plot : <?= $value['plot'] ?>
            </div>
            Cast : <?= $value['cast'] ?>
            <hr>
        </div>
        </div>
        <?php }; ?>
    </body>

    </html>
