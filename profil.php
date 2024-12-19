<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nomProfil'] = $_POST['nomProfil'];
    $_SESSION['titreProfil'] = $_POST['titreProfil'];
    $_SESSION['descriptionProfil'] = $_POST['descriptionProfil'];
    $_SESSION['aPropos'] = $_POST['aPropos'];
} else {

    $_SESSION['nomProfil'] = "Thomas Bouyssic Lopes";
    $_SESSION['titreProfil'] = "Étudiant en BTS SIO";
    $_SESSION['descriptionProfil'] = "Passionné par le monde de l'information et en quête de découvrir ma voie professionnelle.";
    $_SESSION['aPropos'] = "Bonjour à tous, je m'appelle Thomas Bouyssic Lopes et j'ai 18 ans. Actuellement, je poursuis mes études en BTS Services Informatiques aux Organisations (SIO). Passionné par le monde de l'information, je suis en quête de découvrir ma voie professionnelle. Je souhaite explorer les nombreuses possibilités offertes dans ce domaine, bien que je ne sois pas encore certain du chemin exact que je souhaite emprunter. Un de mes grands objectifs est de partir au Canada. Je crois fermement que cette expérience me permettra non seulement de développer mes compétences techniques, mais aussi d'améliorer mon anglais. Je suis convaincu qu'une immersion dans un nouvel environnement culturel m'aidera à élargir mes horizons professionnels et personnels. En dehors de mes études, j'ai plusieurs passions qui rythment mon quotidien. Je suis un grand amateur de tennis, un sport qui m'enseigne la discipline et la persévérance. J'aime également me plonger dans l'univers des jeux vidéo, où je peux explorer des mondes imaginaires et relever des défis. En général, je suis passionné par le sport et la santé, et j'aime rester actif et découvrir de nouvelles activités physiques. Je suis enthousiaste à l'idée de construire mon avenir dans le domaine de l'information et de rencontrer des personnes partageant les mêmes intérêts. Merci de m'avoir écouté, et j'espère avoir l'occasion d'échanger avec vous sur nos passions et nos aspirations professionnelles.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Profil</title>
    <link rel="stylesheet" href="profil.css">
</head>
<body>
    <div class="hero">
        <h1>Mon profil</h1>
    </div>

    <div class="container">
        <div class="moi">
            <h2>Présentation</h2>
            <?php if (!empty($_SESSION['nomProfil'])): ?>
                <h1><?= htmlspecialchars($_SESSION['nomProfil']) ?></h1>
                <h2><?= htmlspecialchars($_SESSION['titreProfil']) ?></h2>
                <p><?= htmlspecialchars($_SESSION['descriptionProfil']) ?></p>
                
                <section id="about">
                    <h3>À propos de moi</h3>
                    <p><?= htmlspecialchars($_SESSION['aPropos']) ?></p>
                </section>
            <?php endif; ?>
        </div>
    </div>

   
</body>
</html>
