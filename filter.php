<?php 
$badword = trim($_GET['badword']);
$paragraph = trim($_GET['paragraph']);
$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace($badword, '***', $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniele Minieri">
        <title>Bad Words Detector</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body class="bg-secondary">
        <div class="container">
        <div class="row">
                <div class="col-6 text-center mt-5">
                    <div class="card">
                        <h1 class="mb-2">Paragrafo</h1>
                        <p class="mb-2"><?= ucfirst($paragraph) ?></p>
                        <p>Il paragrafo è lungo <span><?= $paragraph_length ?></span> caratteri</p>
                    </div>
                </div>
                <div class="col-6 text-center mt-5">
                    <div class="card">
                        <h1 class="mb-2">Paragrafo con censura</h1>
                        <p class="mb-2"><?= ucfirst($censored_paragraph) ?></p>
                        <p>Il paragrafo è lungo <span><?= $censored_paragraph_length ?></span> caratteri</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>