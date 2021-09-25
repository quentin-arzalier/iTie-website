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
    <h1>Nous rejoindre</h1>
    <div class="mainTexte">
        <p class="titre">En recherche de stage? Nous recrutons!</p>
        <p>Notre nouvelle entreprise est actuellement à la recherche d'un stagiaire afin d'assister au développement d'une application mobile et de notre entreprise. Pour plus d'informations, veuillez consulter la fiche de poste ci-dessous!</p>
        <p class="titre"><a href="assets/Fiche-Poste-iDesigner.pdf">La fiche de poste</a> :</p>
        <embed src="assets/Fiche-Poste-iDesigner.pdf#toolbar=0&navpanes=0&scrollbar=0&view=FitH" type="application/pdf"/>
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