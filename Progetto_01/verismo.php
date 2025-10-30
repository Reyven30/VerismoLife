<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VerismoLife</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body class="text-white" style="background-color: #000;">

        <header class="position-relative text-center text-white" style="height:40vh; padding-top:15vh; background: url('img/background.jpeg') center/cover ;">

            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(41,39,39,0.5);"></div>
            <div class="position-relative" style="z-index: 2;">
            <h1 class="display-3 fw-bold"> I Protagonisti del Verismo</h1>
            </div>
        </header>

        <div class="container my-5">

            <p class="lead fw-bold" style="font-size: 4rem;">VerismoLife</p>
            <p class="lead fw-normal" style="font:">Benvenuto! Scopri di più sui principali autori del movimento verista italiano.</p>
            <hr style="border:0; border-top:1px solid rgba(255, 255, 255, 1); margin: 2rem 0;">
        </div>

        <div class="container my-0">
            <?php
            $authors = array(
                [
                    "name" => "Giovanni Verga",
                    "opere" => "I Malavoglia", "Mastro-don Gesualdo",
                    "image" => "img/Giovanni Verga.jpeg",
                    "bio" => "Giovanni Verga è stato uno scrittore e drammaturgo italiano, considerato il principale esponente del verismo in Italia. Le sue opere più famose includono 'I Malavoglia' e 'Mastro-don Gesualdo', che esplorano la vita delle classi sociali più umili in Sicilia."
                ],
                [
                    "name" => "Luigi Capuana",
                    "opere" => "Giacinta", "Il marchese di Roccaverdina",
                    "image" => "img/Luigi_Capuana.jpeg",
                    "bio" => "Luigi Capuana è stato uno scrittore, critico letterario e giornalista italiano, noto per il suo contributo al movimento verista. Le sue opere spesso trattano temi sociali e psicologici, come in 'Giacinta' e 'Il marchese di Roccaverdina'."
                ],
                [
                    "name" => "Federico De Roberto",
                    "opere" => "I Viceré",
                    "image" => "img/federico_DeRoberto.jpeg",
                    "bio" => "Federico De Roberto è stato uno scrittore italiano, noto per il suo romanzo 'I Viceré', che offre una critica della nobiltà siciliana durante il periodo post-unitario. La sua opera è caratterizzata da un'analisi profonda dei conflitti sociali e politici."
                ],
                [
                    "name" => "Matilde Serao",
                    "opere" => "Fantasia", "Il ventre di Napoli",
                    "image" => "img/Matilde_Serao.jpg",
                    "bio" => "Matilde Serao è stata una scrittrice e giornalista italiana, nota per il suo contributo al verismo e al naturalismo. Le sue opere, come 'Fantasia' e 'Il ventre di Napoli', offrono un'analisi profonda della società napoletana."
                ],
                [
                    "name" => "Grazia Deledda",
                    "opere" => "La scogliera di Zante",
                    "image" => "img/Grazia_Deledda.jpg",
                    "bio" => "Grazia Deledda è stata una scrittrice italiana, vincitrice del Premio Nobel per la letteratura nel 1926. La sua opera 'La scogliera di Zante' affronta temi veristi attraverso la narrazione di storie ambientate in contesti sociali difficili."
                ]
            );


            foreach ($authors as $author): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-dark text-white border-light h-100">
                        <img src="<?php echo $author['image']; ?>" class="card-img-top" alt="<?php echo $author['name']; ?>">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $author['name']; ?></h3>
                            <p class="card-text"><?php echo $author['bio']; ?></p>
                            <p class="card-text"><small class="text-white-50">Opere principali: <?php echo $author['opere']; ?></small></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>