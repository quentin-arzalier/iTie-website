<?php

class Util
{

    private $canVote;
    private $upvotes;
    private $downvotes;

    public function __construct($ip, $postData){
        require_once('./assets/classes/Model.php');
        $sql = "SELECT COUNT(*) AS nb FROM iTieupvotes WHERE ipAdress=:adress";
        $this->upvotes = null;
        $this->downvotes = null;
        $req_prep = Model::getPDO()->prepare($sql);
        $this->canVote = true;
        $value = array(
            "adress" => $ip,
        );
        try {
            if (!empty($postData)){
                if ($postData['vote'] == "up"){
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
                $this->canVote = false;

                $pdo_stmt = Model::getPDO()->query("SELECT COUNT(*) as nbUp FROM iTieupvotes WHERE vote=1");
                $pdo_stmt->setFetchMode(PDO::FETCH_OBJ);
                $this->upvotes = $pdo_stmt->fetchAll()[0]->nbUp;

                $pdo_stmt2 = Model::getPDO()->query("SELECT COUNT(*) as nbDown FROM iTieupvotes WHERE vote=0");
                $pdo_stmt2->setFetchMode(PDO::FETCH_OBJ);
                $this->downvotes = $pdo_stmt2->fetchAll()[0]->nbDown;
            }
        } catch (PDOException $e) {
            $this->canVote = false;
        }
    }
    function getInfo(){
        $path = debug_backtrace()[0]['file'];
        $arr = explode("/", $path);
        $file = $arr[count($arr)-1];
        if ($this->canVote == true){
            echo "<p>La iTie vous intéresse-t-elle?</p>";
            echo "<div>";
            echo "<form id=\"form1\" action='$file' method='POST'>";
            echo '    <input type="hidden" name="vote" value="up" />';
            echo "    <button type=\"submit\" form=\"form1\" value=\"upvote\"><img src=\"assets/img/thumb.png\" alt=\"upvote\" class=\"thumb\"></button>";
            echo "</form>";
            echo "<form id=\"form2\" action='$file' method='POST'>";
            echo '    <input type="hidden" name="vote" value="down" />';
            echo "    <button type=\"submit\" form=\"form2\" value=\"downvote\"><img src=\"assets/img/thumb.png\" alt=\"downvote\" class=\"thumb\"></button>";
            echo "</form>";
            echo "</div>";
        } else {

            echo "<p> Les résultats actuels du vote :</p>";
            echo "<p>$this->upvotes personnes sont intéressées.</p>";
            echo "<p>$this->downvotes personnes ne sont pas intéressées.</p>";
        }

    }

}