<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Déposer une recette</title>
</head>
<body>
    <h1>Déposer une nouvelle recette</h1>
    
    <form action="php/deposer.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titre">Titre de la recette :</label>
            <input type="text" id="titre" name="titre" required>
        </div>

        <div>
            <label for="description">Description :</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="temps_preparation">Temps de préparation (en minutes) :</label>
            <input type="number" id="temps_preparation" name="temps_preparation" required>
        </div>

        <div>
            <label


            <?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=koo2fourchette;charset=utf8', 'utilisateur', 'mot_de_passe');

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $temps_preparation = intval($_POST['temps_preparation']);
    $ingredients = htmlspecialchars($_POST['ingredients']);
    $instructions = htmlspecialchars($_POST['instructions']);
    
    // Traitement de l'image
    $photo = null;
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $dossier_destination = '../images/recettes/';
        $nom_fichier = uniqid() . '_' . $_FILES['photo']['name'];
        if(move_uploaded_file($_FILES['photo']['tmp_name'], $dossier_destination . $nom_fichier)) {
            $photo = $nom_fichier;
        }
    }
    
    try {
        // Préparation de la requête
        $requete = $db->prepare('INSERT INTO recettes (titre, description, temps_preparation, ingredients, instructions, photo, date_creation) 
                                VALUES (:titre, :description, :temps_preparation, :ingredients, :instructions, :photo, NOW())');
        
        // Exécution de la requête
        $requete->execute([
            'titre' => $titre,
            'description' => $description,
            'temps_preparation' => $temps_preparation,
            'ingredients' => $ingredients,
            'instructions' => $instructions,
            'photo' => $photo
        ]);
        
        // Redirection vers une page de confirmation
        header('Location: ../confirmation.php?message=Recette ajoutée avec succès');
        exit();
        
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>