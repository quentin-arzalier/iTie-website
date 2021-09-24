<?php
require_once('./assets/classes/Model.php');
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT COUNT(*) AS nb FROM iTieupvotes WHERE ipAdress=:adress";
$req_prep = Model::getPDO()->prepare($sql);
$canVote = true;
$value = array(
    "adress" => $ip,
);
try {
    if (!empty($_POST)){
        if ($_POST['vote'] == "up"){
            $int = 1;
        }
        else {
            $int = 0;
        }
        $vote_req = Model::getPDO()->prepare("INSERT INTO iTieupvotes (ipAdress, vote) VALUES ('$ip', $int)");
        $vote_req->execute();
    }
    $req_prep->execute($value);
    $req_prep->setFetchMode(PDO::FETCH_OBJ);
    $connected = $req_prep->fetchAll();
    if ($connected[0]->nb != '0'){
        $canVote = false;

        $pdo_stmt = Model::getPDO()->query("SELECT COUNT(*) as nbUp FROM iTieupvotes WHERE vote=1");
        $pdo_stmt->setFetchMode(PDO::FETCH_OBJ);
        $upvotes = $pdo_stmt->fetchAll()[0]->nbUp;

        $pdo_stmt2 = Model::getPDO()->query("SELECT COUNT(*) as nbDown FROM iTieupvotes WHERE vote=0");
        $pdo_stmt2->setFetchMode(PDO::FETCH_OBJ);
        $downvotes = $pdo_stmt2->fetchAll()[0]->nbDown;
    }
    else {
        $content = http_build_query (array (
            'upvote' => 'Value1',
        ));
        $context = stream_context_create (array (
            'http' => array (
                'method' => 'POST',
                'content' => $content,
            )
        ));

        $upvotes = null;
        $downvotes = null;
    }
} catch (PDOException $e) {
    $canVote = false;
    $connected = null;
    $upvotes = null;
    $downvotes = null;
}
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
        if ($canVote == true){
            echo "<p>La iTie vous intéresse-t-elle?</p>";
            echo "<div>";
            echo "<form id=\"form1\" action='rejoindre.php' method='POST'>";
            echo '    <input type="hidden" name="vote" value="up" />';
            echo "    <button type=\"submit\" form=\"form1\" value=\"upvote\"><img src=\"assets/img/thumb.png\" alt=\"upvote\" class=\"thumb\"></button>";
            echo "</form>";
            echo "<form id=\"form2\" action='rejoindre.php' method='POST'>";
            echo '    <input type="hidden" name="vote" value="down" />';
            echo "    <button type=\"submit\" form=\"form2\" value=\"downvote\"><img src=\"assets/img/thumb.png\" alt=\"downvote\" class=\"thumb\"></button>";
            echo "</form>";
            echo "</div>";
        } else {

            echo "<p> Les résultats actuels du vote :</p>";
            echo "<p>$upvotes personnes sont intéressées.</p>";
            echo "<p>$downvotes personnes ne sont pas intéressées.</p>";
        }

        ?>
    </div>
</header>
<main>
    <h1>La iTie</h1>
    <div class="mainTexte">
        <p>page rejoindre uwu</p>
        <p>Y mettre les infos sur l'offre de stage et tout tavu</p>
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