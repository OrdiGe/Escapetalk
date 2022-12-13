<?php 
include_once('dbcon.php');
include_once 'class/class.pdo.php';
class Queries{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }


    public function get_ranks()
    {
        $ranks = $this->db->run("SELECT rank_id AS id, title AS name, points AS minScore FROM cms_ranks")->fetchAll(PDO::FETCH_ASSOC);

        return $ranks;

    }

    public function get_badges()
    {
        $badges = $this->db->run("SELECT id, title, description, points, icon FROM cms_badges")->fetchAll(PDO::FETCH_ASSOC);

        foreach ($badges as &$badge) {

            //get random number in array
            
            $badge['progress'] = ['currentvalue' => 1, 'challengeCompletedValue' => 1];
           $badge['claimed'] = 0;

            if($badge['claimed'] == 0){
                if($badge['progress']['currentvalue'] >= $badge['progress']['challengeCompletedValue']){
                    $badge['claimable'] = 1;
                }else{
                    $badge['claimable'] = 0;
                }
            }else{
                $badge['claimable'] = 0;
            }
        }

        return $badges;

    }

    public function claim_badge($badge_id, $user_id)
    {
        $insert = $this->db->run("INSERT INTO cms_claimed_badges (badge_id, user_id) VALUES (:badge_id, :user_id)", 
        [
            ':badge_id' => $badge_id,
            ':user_id' => $user_id
        ]);

        return $insert;
    }

    public function get_claimed_badges($user_id)
    { 
        $claimed_badges = $this->db->run("SELECT b.title, b.icon, b.points, b.description FROM cms_claimed_badges AS cb LEFT JOIN cms_badges AS b ON cb.badge_id = b.id WHERE cb.user_id = :user_id", [':user_id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);
        //WHERE cb.badge_id = :badge_id AND cb.user_id = :user_id",[':badge_id' => $badge_id, ':user_id' => 2]
        return $claimed_badges;
    }
}


?>