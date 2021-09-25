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
        <a href="https://forms.gle/XJzrt89RryMzKY5v6">Formulaire d'étude d'impact</a>
        <!--<a href="faq.php">F.A.Q</a>-->
        <a href="rejoindre.php">Nous rejoindre</a>
    </nav>
    <div class="voteBox">
        <?php
        $ut->getInfo();
        ?>
    </div>
</header>
<main>
    <h1>La Foire aux Q</h1>
    <div class="mainTexte">
        <p>page Faq uwu</p>
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