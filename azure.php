<?php
// Activer le mode strict pour renforcer les types de données
declare(strict_types=1);

// Fonction pour afficher un message
function afficherMessage(string $message): void {
    echo htmlspecialchars($message);
}

// Titre de la page
$titre = "Ma première page en PHP 8.2";
$message = "Bienvenue sur ma page en PHP 8.2!";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titre); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #5D5C61;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($titre); ?></h1>
        <p><?php afficherMessage($message); ?></p>
    </div>
</body>
</html>
