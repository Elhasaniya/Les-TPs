<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicio - Menu</title>
    <link rel="stylesheet" href="mini-site.css">
</head>
<body>
    <header>
        <div class="container">
            <h1> E-commerce de restauration 🍽️</h1>
            <nav>
                <ul>
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="dashboard.php">Bienvenue, <?= $_SESSION['user'] ?></a></li>
                        <li><a href="logout.php">Déconnexion</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Se connecter</a></li>
                        <li><a href="register.php">S'inscrire</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <button id="themeToggle">🌙</button>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h2>Le meilleur de la cuisine chez vous !</h2>
            <p>Commandez vos plats préférés en un clic.</p>
        </div>
    </section>

    <section id="menu" class="menu">
        <h2>Notre Menu</h2>
        <div class="grid">
            <div class="item">
                <img src="image/pizza.png" alt="Pizza Margherita">
                <h3>Pizza Margherita</h3>
                <p>Délicieuse pizza avec sauce tomate, mozzarella et basilic.</p>
            </div>
            <div class="item">
                <img src="image/burgger.png" alt="Burger Classique">
                <h3>Burger Classique</h3>
                <p>Un burger juteux avec steak, fromage et sauce maison.</p>
            </div>
            <div class="item">
                <img src="image/salade.png" alt="Salade César">
                <h3>Salade César</h3>
                <p>Une salade légère au poulet, parmesan et sauce césar.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contactez-nous</h2>
        <p>Email : contact@ecommerce.com | Téléphone : +212 651 01 13 96</p>
    </section>

    <footer>
        <p>&copy; 2025 E-commerce de restauration. Tous droits réservés.</p>
    </footer>

    <script src="mini-site.js"></script>
</body>
</html>
