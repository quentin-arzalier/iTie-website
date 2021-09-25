<?php
require_once "assets/classes/Util.php";
$ut = new Util($_SERVER['REMOTE_ADDR'], $_POST);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title> iDesigner official website </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <link rel="icon" type="image/ico" href="assets/img/favicon.ico"/>
</head>

<body id="top_page">
<header>
    <a href="index.php" id ="accueil"><img src="assets/img/logo.png" alt="logo"></a>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="produit.php">La iTie</a>
        <a href="formulaire.php">Votre avis</a>
        <a href="rejoindre.php">Nous rejoindre</a>
    </nav>
    <div class="voteBox">
        <?php
        $ut->getInfo();
        ?>
    </div>
</header>
<main>
    <h1>Accueil</h1>
    <div class="mainTexte">
        <p class="titre">Bienvenue sur le site officiel iDesigner!</p>
        <p>Ce site internet recense nos différents produits que nous créons de A à Z, de la conception à la production et à la vente. Nous sommes une entreprise qui compte se spécialiser
        rapidement dans la vente d'accessoires et de vêtements connectés. Notre premier produit, <a href="produit.php">la iTie</a> est en cours de conceptualisation, et nous sommes plus
        que prêts à commencer une aventure dans le monde de la technologie.</p>
        <p class="titre">Votre volonté, notre force!</p>
        <p>Notre entreprise iDesigner a un objectif très simple comme idéologie principale : faciliter la vie de ses clients. Nous comptons, à travers nos divers produits connectés, amener
        le futur de la technologie vestimentaire au grand public. Le vêtement du futur, c'est le vêtement iDesigner. Nous avons un grand nombre d'idées en phase de conception, et nous comptons
        sur le succès de notre premier produit afin de nous élancer dans le monde des produits connectés.</p>
        <p class="titre">Nous vous écoutons!</p>
        <p>Puisque la iTie est notre premier produit jamais créé, nous sommes plus que tout à l'écoute de nos potentiels clients, vous! C'est pour cela que nous avons mis en ligne un
        <a href="https://forms.gle/XJzrt89RryMzKY5v6">formulaire</a> permettant à tout un chacun de juger notre produit et de donner son propre avis. Vous retrouverez également en haut à droite de notre site un système
        de vote vous permettant de dire si le produit vous intéresse ou non. Ces statistiques nous permettrons d'affiner le développement de notre produit afin de convenir à vos besoins
        au mieux possible!</p>
        <p>Merci de votre participation à la vie de notre entreprise!</p>
    </div>
</main>
<footer>
    <div class="footerTexte">
        <p>Tout produit publicité sur ce site appartient à l'entreprise iDesigner.</p>
        <p>Pour une quelconque réclamation ou autre demande, voici notre adresse de contact : contact@idesigner.fr</p>
    </div>
    <a href="#top_page">Retour au début</a>
</footer>
</body>
</html>