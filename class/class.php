<?php 
include_once('dbcon.php');
include_once 'class/class.pdo.php';
class Queries{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getRanks()
    {
        $ranks = $this->db->run("SELECT rank_id AS id, title AS name, points AS minScore FROM cms_ranks")->fetchAll(PDO::FETCH_ASSOC);

        return $ranks;

    }

    public function getBadges()
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

    public function claimBadge($badge_id, $user_id)
    {
        $insert = $this->db->run("INSERT INTO cms_claimed_badges (badge_id, user_id, claimed_human_date) VALUES (:badge_id, :user_id, NOW())", 
        [
            ':badge_id' => $badge_id,
            ':user_id' => $user_id
        ]);

        return $insert;
    }


    public function getClaimedBadges($user_id)
    { 
        $claimed_badges = $this->db->run("SELECT b.id, b.title, b.icon, b.points, b.description FROM cms_badges AS b LEFT JOIN cms_claimed_badges AS cb ON b.id = cb.badge_id WHERE cb.user_id = :user_id ORDER BY claimed_human_date DESC", [':user_id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);

        return $claimed_badges;
    }

    public function getAllClaimedBadges($badges)
    {
        if(!is_numeric(implode('', $badges))) return false;
        
        $ids = implode(', ', $badges);
        $claimed_badges = $this->db->run("SELECT b.id, b.title, b.icon, b.points, b.description FROM cms_badges AS b LEFT JOIN cms_claimed_badges AS cb ON b.id = cb.badge_id WHERE b.id IN (" . $ids . ")")->fetchAll(PDO::FETCH_ASSOC);

        return $claimed_badges;
    }

    public function awardPoints($points, $user_id)
    {
        $update = $this->db->run("UPDATE site_users SET points = points + :points WHERE id = :user_id", [':points' => $points, ':user_id' => $user_id]);

        return $update;
    }

    public function getPoints($user_id)
    {
        $get_points = $this->db->run("SELECT points FROM `site_users` WHERE id = :id", [':id' => $user_id])->fetch();

        if(!$get_points)
        {
            return 0;
        }

        return $get_points->points;
    }
}
