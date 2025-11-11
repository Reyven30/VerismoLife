<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VerismoLife</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap"rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body class="text-white">

    <header class="position-relative">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-img">
        </div>

        <nav class="navbar navbar-expand-lg fixed-top d-flex align-items-center">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Verismolife</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#authors-section">Authors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="container my-5">

        <p class="lead fw-bold subtitle" id="authors-section">I Grandi del Verismo</p>
        <p class="lead fw-normal text">Scopri di più sui
            principali autori del movimento verista italiano.</p>
        <hr>
    </div>

    <div class="container my-0">
        <?php
            $authors = array(
                [
                    "name" => "Giovanni Verga (1840-1922)",
                    "opere" => ["I Malavoglia", "Mastro-don Gesualdo"],
                    "image" => "img/Giovanni Verga.jpeg",
                    "bio" => "Giovanni Verga fu uno scrittore italiano esponente del Verismo la sua produzione letteraria si concentra sulla rappresentazione realistica della vita dei ceti popolari siciliani con uno stile asciutto e distaccato ponendo al centro le difficoltà quotidiane, le dinamiche sociali e l’inevitabilità del destino dei personaggi la sua narrativa influenzò profondamente la letteratura italiana di fine Ottocento."
                ],
                [
                    "name" => "Luigi Capuana (1839-1915)",
                    "opere" => ["Giacinta", "Il marchese di Roccaverdina"],
                    "image" => "img/Luigi_Capuana.jpeg",
                    "bio" => "Luigi Capuana fu uno scrittore, critico e teorico del Verismo italiano la sua attività letteraria e critica si concentrò sulla rappresentazione realistica della vita quotidiana e sull’analisi psicologica dei personaggi promuovendo i principi del Verismo e influenzando autori come Giovanni Verga il suo stile si caratterizzava per l’attenzione ai dettagli sociali e culturali e per la riflessione sui meccanismi della società siciliana."
                ],
                [
                    "name" => "Federico De Roberto (1861-1927)",
                    "opere" => ["I Viceré"],
                    "image" => "img/federico_DeRoberto.jpeg",
                    "bio" => "Federico De Roberto fu uno scrittore e giornalista italiano esponente del Verismo la sua produzione letteraria si concentra sulla rappresentazione realistica e critica della società meridionale con attenzione psicologica ai personaggi e alle loro condizioni sociali ed economiche sviluppò uno stile sobrio e oggettivo esplorando temi come il potere, l’ingiustizia e le tensioni familiari e sociali influenzando la narrativa italiana di fine Ottocento."
                ],
                [
                    "name" => "Matilde Serao (1856-1927)",
                    "opere" => ["Fantasia", "Il ventre di Napoli"],
                    "image" => "img/Matilde_Serao.jpg",
                    "bio" => "Matilde Serao fu una scrittrice e giornalista italiana la sua produzione letteraria si concentra sulla rappresentazione realistica della vita napoletana con attenzione ai dettagli sociali e psicologici dei personaggi affrontando temi come povertà, ingiustizia e condizione femminile il suo stile univa realismo e sensibilità narrativa contribuendo allo sviluppo della letteratura verista in Italia."
                ],
                [
                    "name" => "Grazia Deledda (1871-1936)",
                    "opere" => ["La scogliera di Zante"],
                    "image" => "img/Grazia_Deledda.jpg",
                    "bio" => "Grazia Deledda fu una scrittrice italiana la sua produzione letteraria si concentra sulla vita e le tradizioni della Sardegna con attenzione ai conflitti morali, alle difficoltà quotidiane e ai legami familiari il suo stile unisce realismo e sensibilità poetica affrontando temi universali come il destino, la sofferenza e la giustizia sociale, influenzando profondamente la narrativa italiana del suo tempo."
                ]
            );

            foreach ($authors as $author): ?>
        <div class="d-flex flex-column align-items-center mb-5">
            <img src="<?php echo $author['image']; ?>" class="rounded-circle mb-3" alt="<?php echo $author['name']; ?>">
            <h3 class="text-center author"><?php echo $author['name'];  ?></h3>
            <p class="text-center mx-auto bio"><?php echo $author['bio']; ?></p>
            <div class="text-center text-white-50">
                <strong>Opere principali:</strong>
                <ul class="list-unstyled">
                    <?php foreach ($author['opere'] as $opera): ?>
                    <li><?php echo $opera; ?></li>
                    <?php endforeach; ?>
                </ul>
                <hr>
            </div>
            <?php endforeach; ?>
        </div>
    </div>



</body>

</html>