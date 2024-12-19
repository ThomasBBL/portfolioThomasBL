<?php
require_once('login.php');

// Récupération des membres
$req = $bdd->query('SELECT * FROM membres ORDER BY dateCrea DESC');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Membres</title>
    <style>
        .membre-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 200px;
            text-align: center;
        }
        .gravatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <h1>Liste des Membres</h1>
    
    <div class="membres-container">
        <?php while($membre = $req->fetch()) : ?>
            <div class="membre-card">
                <img src="images/gravatars/<?php echo htmlspecialchars($membre['gravatar']); ?>" 
                     alt="Avatar de <?php echo htmlspecialchars($membre['prenom']); ?>" 
                     class="gravatar">
                <h3><?php echo htmlspecialchars($membre['prenom'] . ' ' . $membre['nom']); ?></h3>
                <p>Login: <?php echo htmlspecialchars($membre['login']); ?></p>
                <p>Statut: <?php echo htmlspecialchars($membre['statut']); ?></p>
                <p>Membre depuis: <?php echo date('d/m/Y', strtotime($membre['dateCrea'])); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>