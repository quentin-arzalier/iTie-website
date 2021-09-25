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
    <h1>La iTie</h1>
    <div class="mainTexte">
        <p class="titre">Introduction</p>
        <p>Vous est-il déjà arrivé de songer à porter une cravate en allant travailler, en entretien ou à un évènement quelconque, mais la difficulté incommensurable de la tâche vous a forcé à laisser tomber? Nous connaissons ce problème, et nous avons conceptualisé un produit visant à y pallier.</p>
        <p class="titre">La iTie, qu'est-ce que c'est?</p>
        <p>Du premier coup d'oeil, la iTie est une simple cravate, simplement un accessoire à porter autour du cou pour obtenir un air sérieux et respectable. Ce que la personne en face ne voit pas sont les fonctionnalités de la iTie. La fonctionnalité principale est bien sûr son aspect automatique. La iTie est complètement autonome et se nouera toute seule. Plus besoin d'arriver 35 minutes en retard à votre travail ou votre entretien. La iTie s'occupe de tout pour vous pour que vous gagniez du temps au quotidien!</p>
        <p class="titre">Mais comment est-ce possible?</p>
        <p>Le fonctionnement de la iTie est étroitement lié à son aspect connecté et à notre application mobile officielle iDesigner. À l'aide d'une connexion bluetooth simple et sécurisée à et d'un compte iDesigner, l'utilisateur pourra activer les différentes fonctionnalités de la cravate avec le simple appui d'un bouton. Choisissez entre plus d'une dizaine de nœuds populaires pour votre cravate et accédez à de nombreuses fonctionnalités toutes les plus utiles les unes que les autres grâce à votre téléphone portable!</p>
        <p class="titre">Comment la iTie facilite-t-elle la vie au travail?</p>
        <p>Outre que son automatisme, la iTie propose diverses fonctionnalités connectées. Parmi elles, vous pouvez retrouver le simple micro-cravate, connecté en bluetooth à votre application et détectable par les appareils nécessitant une entrée audio. Plus besoin de s'encombrer en réunion, en séminaire ou en conférence à l'aide de lui! De plus, à l'aide d'un système de vibreur lié à l'application et à votre calendrier personnel, vous pouvez programmer et recevoir des rappels discrets de vos réunions ou autres rendez-vous.</p>
        <p class="titre">Soucieux de votre santé? N'ayez crainte!</p>
        <p>La iTie offre quelques options lié à la santé de l'utilisateur dans sa panplie de fonctionnalités. Un simple capteur posé au niveau du cou permet de détecter le rythme cardiaque du porteur et le partage à l'application mobile pour qu'il puisse le consulter. La cravate va également calculer le nombre de pas du porteur sur différentes périodes et les afficher sur l'application. Gardez le contrôle sur votre santé grâce à iTie!</p>
        <p class="titre">Le mot de la fin.</p>
        <p>La iTie n'en est à ce jour qu'à ses jours d'essais, et nous nous acharnons pour créer le produit le plus adaptés au besoins de notre client. Pour cela, nous avons crée un <a href="formulaire.php">formulaire d'étude</a> sur lequel vous pouvez nous partager vos idées et ce que vous pensez du produit. De plus, n'hésitez pas à dire si le produit vous intéresse ou pas à l'aide de l'encadré de vote</p>
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