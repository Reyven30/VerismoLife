<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VerismoLife</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="text-white" style="background-image: linear-gradient(to right top, #000000, #171315, #231f26, #2c2d38, #313d4a);font-family: 'Playfair Display', serif;">

    <header class="position-relative" style= "height:100vh;">
      <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('img/background.png'); background-size: cover; background-position: center;clip-path: polygon(0 8%, 91% 30%, 70% 80%, 0 78%);background-position: bottom 5px;">
      </div>

        <nav class="navbar navbar-expand-lg fixed-top d-flex align-items-center"
            style="height: 10vh;background-color: rgba(44, 45, 56, 0.8); width: 70%; margin: 2rem auto 0 auto; border-radius: 15px;">
            <div class="container-fluid">
                <a class="navbar-brand text-white" style="font-size: 3rem; padding-left: 1rem;" href="#">Verismolife</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="gap:20px;">
                        <li class="nav-item">
                            <a class="nav-link active text-white" style="font-size: 1.2rem" aria-current="page"
                                href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" style="font-size: 1.2rem"
                                href="#authors-section">Authors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" style="font-size: 1.2rem" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" style="font-size: 1.2rem" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="position-absolute bottom-0 start-0 h-75">

        </div>
    </header>

    <div class="container my-5">

        <p class="lead fw-bold" style="font-size: 3rem; font-family: 'Playfair Display', serif; letter-spacing: 0.5px;"
            id="authors-section">I grandi del Verismo</p>
        <p class="lead fw-normal"
            style="font-size: 1.2em;font-family: 'Playfair Display', serif; letter-spacing: 0.5px;">Scopri di più sui
            principali autori del movimento verista italiano.</p>
        <hr style="border:0; border-top:1px solid rgba(255, 255, 255, 1); margin: 2rem 0;">
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
            <img src="<?php echo $author['image']; ?>" class="rounded-circle mb-3"
                style="width: 200px; height: 200px; object-fit: cover;" alt="<?php echo $author['name']; ?>">
            <h3 class="text-center" style="font-family: 'Playfair Display', serif;"><?php echo $author['name'];  ?></h3>
            <p class="text-center mx-auto"
                style="max-width: 800px;font-family: 'Playfair Display', serif; font-weight: 400;line-height: 1.8;">
                <?php echo $author['bio']; ?></p>
            <div class="text-center text-white-50">
                <strong>Opere principali:</strong>
                <ul class="list-unstyled">
                    <?php foreach ($author['opere'] as $opera): ?>
                    <li><?php echo $opera; ?></li>
                    <?php endforeach; ?>
                </ul>
                <hr style="border:0; border-top:1px solid rgba(255, 255, 255, 1);">
            </div>
            <?php endforeach; ?>
        </div>
</body>

</html>