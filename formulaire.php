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

</header>
<main>
    <h1>Que pensez vous de notre produit?</h1>
    <div class="mainTexte">
        <p class="titre">Votre avis nous intéresse!</p>
        <p>Puisque notre produit, la iTie, en est encore à sa période de développement, nous vous invitons à répondre à ce court questionnaire afin de nous faire une meilleure idée de ce que vous recherchez dans notre produit.</p>
        <p>N'hésitez pas à lire le contenu de <a href="produit.php">la page produit</a> avant de répondre afin de comprendre totalement ce qu'est la iTie!</p>
        <iframe class="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSc8CC-GM5G76VzK4RQa6xpNPieKaxJaz0qpN9xQ1ld1jaARyw/viewform?embedded=true" width="100%" height="750px">Loading…</iframe>
    </div>
</main>
<div id="votePopup">
    <div id="voteBox">
        <button onclick="document.getElementById('voteBox').style.display = 'none';document.getElementById('openVote').style.display = 'flex'; localStorage.setItem('collapsed', 'true');">
            <img src="assets/img/arrow.png" alt="collapse" id="arrow">
        </button>
        <?php
        $ut->getInfo();
        ?>
    </div>
    <div id="openVote">
        <button onclick="document.getElementById('voteBox').style.display = 'flex'; document.getElementById('openVote').style.display = 'none'; localStorage.setItem('collapsed', 'false');">
            <img src="assets/img/arrow.png" alt="expand">
        </button>
    </div>
</div>
<footer>
    <div class="footerTexte">
        <p>Tout produit publicité sur ce site appartient à l'entreprise iDesigner.</p>
        <p>Pour une quelconque réclamation ou autre demande, voici notre adresse de contact : contact@idesigner.fr</p>
    </div>
    <a href="#top_page">Retour au début</a>
</footer>
</body>
</html>
<?php
echo "<script>
if (localStorage.getItem('collapsed') === 'true' ){
document.getElementById('voteBox').style.display = 'none';
document.getElementById('openVote').style.display = 'flex';
}
</script>";?>