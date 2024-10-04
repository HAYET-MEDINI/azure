<?PHP
echo'<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Première Page PHP</title>
    <!-- CSS intégré dans le même fichier -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 2.5rem;
            text-align: center;
        }

        p {
            font-size: 1.2rem;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur ma première page PHP avec du CSS intégré !</h1>
        <p><?php echo "Aujourd'hui, nous sommes le " . date("d/m/Y") . "."; ?></p>
        <p><?php echo "Heure actuelle : " . date("H:i:s"); ?></p>
    </div>
</body>
</html>
'?>
