<?php
session_start();

// Identifiants valides
$valid_username = "admin";
$valid_password = "2003";

// Traitement de la déconnexion
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: auth.php");
    exit();
}

// Traitement de la connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
    } else {
        $error = "Identifiants incorrects !";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
</head>
<body>

<?php if (isset($_SESSION['username'])): ?>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h1>
    <a href="auth.php?logout=true">Se déconnecter</a>

<?php else: ?>
    <h2>Connexion</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="">
        <label>Identifiant:</label>
        <input type="text" name="username" required><br><br>
        <label>Mot de passe:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Se connecter">
    </form>
<?php endif; ?>

</body>
</html>
