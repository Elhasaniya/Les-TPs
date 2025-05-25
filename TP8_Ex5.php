<?php
// Fichier où les messages seront enregistrés
$filename = "messages.txt";

// Traitement de l'envoi du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $message) {
        $date = date("Y-m-d H:i:s");
        $entry = "$date|$name|$message\n";
        file_put_contents($filename, $entry, FILE_APPEND); // Ajouter à la fin du fichier
    }
}

// Lecture des messages existants
$messages = [];
if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        list($date, $name, $message) = explode('|', $line);
        $messages[] = [
            'date' => $date,
            'name' => $name,
            'message' => $message
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Livre d'or</title>
</head>
<body>

<h1>Livre d'or</h1>

<!-- Formulaire -->
<form method="post" action="">
    <label>Nom:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="4" cols="40" required></textarea><br><br>

    <input type="submit" value="Envoyer">
</form>

<hr>

<!-- Affichage des messages -->
<h2>Messages précédents :</h2>
<?php if (!empty($messages)): ?>
    <?php foreach ($messages as $msg): ?>
        <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
            <strong><?php echo htmlspecialchars($msg['name']); ?></strong> 
            <em>(<?php echo $msg['date']; ?>)</em><br>
            <?php echo nl2br(htmlspecialchars($msg['message'])); ?>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun message pour le moment.</p>
<?php endif; ?>

</body>
</html>
