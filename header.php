<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
</head>
    <body>
        
        <header>
                <div class="navbar">
                <a href="index.php" ><img src="image/logo_blanc.png" alt="Logo BMX"></a>
                    <ul class="menu">
                        <li><a href="equipe_membre.php">Equipe & Membre</a></li>
                        <li><a href="calendrier.php">Calendrier</a></li>
                        <li><a href="evenement.php">Evènement</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="boutique.php">Boutique</a></li>
                        <li><a href="FAQ.php">FAQ</a></li>
                        <li><a href="adhesion.php">Adhésion</a></li>
                    </ul>
                </div>
        </header>
        
        <!-- JavaScript pour la gestion de la class active -->
        <script>
            const menuLinks = document.querySelectorAll(".menu a");

            menuLinks.forEach(link => {
                if (link.href === window.location.href) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active");
                }
            });
        </script>

    </body>
</html>