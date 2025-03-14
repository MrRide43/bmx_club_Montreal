<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- === Montserrat === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- === Poppins === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- === Oswald === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Lien vers les pages CSS -->
    <link rel="stylesheet" href="css/page_principal.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" type="image/png" href="image/logo2016bmxmtl.png">

    <title>BMX club Montreal</title>
</head>
<body>

<?php require_once(__DIR__ . '/header.php') ?>
 
    <main>

        <section>
            <img src="image/image-piste2.0.png" class="imagePiste" alt="Piste de BMX ">
        </section>

        <section class="histoireClub">
            <img src="image/piloteHistoire.png" alt="pilote sur le start">
            <div>
                <div class="enteteHistoireClub">
                    <img src="image/bmx-race-1.webp">
                    <h2>Histoire du club </h2>
                </div>
                    <p>
                        La piste de BMX Race de Montréal, inaugurée en 2013, est un lieu emblématique pour les passionnés de BMX. 
                        Depuis sa création, elle a évolué pour devenir un centre de compétition majeur, accueillant des événements locaux et régionaux.
                    </p>

                    <p>
                        Grâce aux efforts des bénévoles et des partenaires, 
                        la piste offre des installations modernes qui soutiennent les athlètes de tous niveaux. 
                        Elle continue de promouvoir le sport et d'encourager les jeunes talents, 
                        consolidant son rôle central dans la communauté BMX de Montréal.
                    </p>
            </div>
        </section>

        <section class="visionClub">
            <div class="content">
                <img src="image/bmx-race-2-2-198x300.webp" alt="icone bmxeurs">
                <p>
                Notre club de BMX sur piste vise à promouvoir ce sport en sensibilisant un large public 
                et en favorisant son développement chez les jeunes et les adultes. </br>
                Nous nous engageons à positionner le BMX comme un sport complet sur le plan physique 
                et à développer les compétences de nos membres. Nous encourageons le partage d'expertise 
                au sein de notre communauté et organisons des courses locales et régionales 
                pour mesurer la progression de nos membres.
                </p>
            </div>
       
            <div class="content2">
                <img src="image/plan-de-la-piste_orig.webp" alt="Plan de la piste">
                <p>
                La piste de BMX de Pointe-aux-Trembles, située dans le parc de la Polyvalente à Montréal (15200 Rue Sherbrooke E), 
                est un site de premier plan pour les amateurs de BMX. Elle est équipée d’un système de départ ProGate à 4 couloirs, 
                de 3 courbes asphaltées. 
                </br> 
                Ainsi que d’un départ et d’une arrivée également asphaltés.
                La piste, dotée d’une base en pierre concassée MG-20 et recouverte de Tenset, est conçue pour accueillir des compétitions régionales. 
                Le club BMX Montréal a la priorité d’utilisation de la piste de mai à octobre, du lundi au vendredi, de 17h à 21h30. 
                </br>
                Les règlements incluent l’obligation du casque intégral, l’interdiction des véhicules à moteur, 
                de l’alcool, et des drogues, ainsi que le respect du sens de circulation et des règles de sécurité pour garantir 
                un environnement sûr pour tous les utilisateurs.
                </p>
            </div>
        </section>

        <section class="bmxSection">
            <img src="image/image_pilote2.0.png" alt="bmxeurs" class="pilote">
            <h2 class="titreBMX">bmx Montréal</h2>
        </section>

        <?php require_once(__DIR__ . '/carrousel.php')?>
        
        <?php require_once(__DIR__ . '/footer.php') ?>  

    </main>
</html>
