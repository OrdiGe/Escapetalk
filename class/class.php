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

        return $badges;

    }

    public function getBadgesProcessForUser($badges, $user_id)
    {
        $claimed_badges = $this->db->run("SELECT badge_id FROM `cms_claimed_badges` WHERE user_id = :user_id", [':user_id' => $user_id])->fetchAll(PDO::FETCH_UNIQUE);
       
        foreach ($badges as &$badge) {

            //get random number in array
            
            $badge['progress'] = ['currentValue' => 1, 'challengeCompletedValue' => 1];
            $badge['claimed'] = (isset($claimed_badges[$badge['id']]) ? 1 : 0);

            if($badge['claimed'] == 0) {
                if($badge['progress']['currentValue'] >= $badge['progress']['challengeCompletedValue']) {
                    $badge['claimable'] = 1;
                }
                else {
                    $badge['claimable'] = 0;
                }
            }
            else {
                $badge['claimable'] = 0;
            }
        }
       // print_r($badges);
        return $badges;
    }

    public function insert_claimed_badge($badge_id, $user_id)
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
        $claimed_badges = $this->db->run("SELECT b.id, b.title, b.icon, b.points, b.description FROM cms_badges AS b LEFT JOIN cms_claimed_badges AS cb ON b.id = cb.badge_id WHERE cb.user_id = :user_id", [':user_id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);

        return $claimed_badges;
    }

    public function getBadges($badges)
    {
        if(!is_numeric(implode('', $badges))) return false;
        
        $ids = implode(', ', $badges);
        $claimed_badges = $this->db->run("SELECT b.id, b.title, b.icon, b.points, b.description FROM cms_badges AS b LEFT JOIN cms_claimed_badges AS cb ON b.id = cb.badge_id WHERE b.id IN (" . $ids . ")")->fetchAll(PDO::FETCH_ASSOC);

        return $claimed_badges;
    }
}
