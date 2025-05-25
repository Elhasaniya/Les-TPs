<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de mot de passe</title>
    <style>
        body {
            font-family: Arial;
            background: #f0f8ff;
            padding: 30px;
        }
        form {
            background: white;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background: #e0ffe0;
            border: 1px solid #8cd98c;
            word-break: break-all;
        }
    </style>
</head>
<body>

<h2>🔐 Générateur de mot de passe</h2>

<form method="post" action="">
    <label for="length">Longueur du mot de passe :</label>
    <input type="number" name="length" min="4" max="50" required>
    <input type="submit" value="Générer">
</form>

<?php
function genererMotDePasse($longueur) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+';
    $motDePasse = '';
    $longueurCaracteres = strlen($caracteres);

    for ($i = 0; $i < $longueur; $i++) {
        $index = rand(0, $longueurCaracteres - 1);
        $motDePasse .= $caracteres[$index];
    }

    return $motDePasse;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $longueur = intval($_POST["length"]);

    if ($longueur < 4) {
        echo "<div class='result'>⚠️ La longueur doit être au minimum de 4 caractères.</div>";
    } else {
        $motDePasseGenere = genererMotDePasse($longueur);
        echo "<div class='result'><strong>Mot de passe généré :</strong><br>$motDePasseGenere</div>";
    }
}
?>

</body>
</html>
