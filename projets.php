<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets - Thème Plage</title>
    <link rel="stylesheet" href="projets.css">
</head>
<body>
    <header>
        <h1>Mes Projets</h1>
        <p>Découvrez mes réalisations </p>
    </header>

    <main>
        

            <section class="projects">
 
    <div class="project-card">
        <h2>Projet 1 - Koo2fourchette</h2>
        <p>Un site interactif pour partager et découvrir des recettes.</p>
        <button onclick="showDetails('Projet 1 - Recettes', 'Ce projet propose des fonctionnalités comme la recherche de recettes, la création de comptes, et la gestion de contenus culinaires. Découvrez comment il peut enrichir votre expérience culinaire !')">
            Voir plus
        </button>
        <img src="koo2fourchette.png" alt="">
        <a href="index.html" class="button-link" target="_blank">Accéder au Projet</a>
    </div>
    


   
    <div class="project-card">
        <h2>Projet 2</h2>
        <p>Description de mon deuxième projet. Cliquez pour en savoir plus !</p>

        <button onclick="showDetails('Projet 2', 'Description détaillée de votre deuxième projet.')">Voir plus</button>
    </div>
</section>


       <div id="project-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
        </div>
    </div>

    <div class="palmier-container">
    <img src="palmier.png" alt="Palmier sur la plage">
    <p class="palmier-caption">Un palmier sous le soleil tropical.</p>
</div>


  
</body>
</html>
