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
    <h1>Que pensez vous de notre produit?</h1>
    <div class="mainTexte" style="width: 700px">
        <p class="titre">Votre avis nous intéresse!</p>
        <iframe class="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSc8CC-GM5G76VzK4RQa6xpNPieKaxJaz0qpN9xQ1ld1jaARyw/viewform?embedded=true" width="100%" height="750px">Loading…</iframe>
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