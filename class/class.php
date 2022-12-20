<?php 
include_once('dbcon.php');
include_once 'class/class.pdo.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
        $badges = $this->db->run("SELECT id, category, title, description, points, icon, completedValue FROM cms_badges")->fetchAll(PDO::FETCH_ASSOC);

        return $badges;

    }

    public function getBadgesProcessForUser($badges, $user_id)
    {
        $claimed_badges = $this->db->run("SELECT badge_id, claimed_human_date FROM `cms_claimed_badges` WHERE user_id = :user_id", [':user_id' => $user_id])->fetchAll(PDO::FETCH_UNIQUE);
        
        foreach ($badges as &$badge) {

            //get random number in array

            if($badge['category'] == 'membership') {
                $badge['progress'] = ['currentValue' => $this->getYearsActive($user_id), 'challengeCompletedValue' => $badge['completedValue']];
            }
            elseif($badge['category'] == 'room_review') {
                $badge['progress'] = ['currentValue' => $this->roomsReviewProgression($user_id), 'challengeCompletedValue' => $badge['completedValue']];
            }
            elseif($badge['category'] == 'game_review') {
                $badge['progress'] = ['currentValue' => $this->gamesReviewProgression($user_id), 'challengeCompletedValue' => $badge['completedValue']];
            }
            elseif($badge['category'] == 'play_room') {
                $badge['progress'] = ['currentValue' => $this->roomsPlayedProgression($user_id), 'challengeCompletedValue' => $badge['completedValue']];
            }
            elseif($badge['category'] == 'play_game') {
                $badge['progress'] = ['currentValue' => $this->gamesPlayedProgression($user_id), 'challengeCompletedValue' => $badge['completedValue']];
            }
            else {
                $badge['progress'] = ['currentValue' => 0, 'challengeCompletedValue' => 1];
            }        

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
        $claimed_human_date = $this->db->run("SELECT claimed_human_date FROM `cms_claimed_badges` WHERE user_id = :user_id", [':user_id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);
        $claimed_badges = $this->db->run("SELECT b.id, b.title, b.icon, b.points, b.description, cb.claimed_human_date FROM cms_badges AS b LEFT JOIN cms_claimed_badges AS cb ON b.id = cb.badge_id WHERE cb.user_id = :user_id ORDER BY claimed_human_date DESC", [':user_id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);

        return $claimed_badges;
        return $claimed_human_date;
    }

    public function getAllClaimedBadges($badges)
    {
        if(!is_numeric(implode('', $badges))) return false;
        
        $ids = implode(', ', $badges);
        $claimed_badges = $this->db->run("SELECT b.id, b.title, b.icon, b.points, b.description FROM cms_badges AS b LEFT JOIN cms_claimed_badges AS cb ON b.id = cb.badge_id WHERE b.id IN (" . $ids . ")")->fetchAll(PDO::FETCH_ASSOC);

        return $claimed_badges;
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

    public function awardPoints($points, $user_id)
    {
        $update = $this->db->run("UPDATE site_users SET points = points + :points WHERE id = :user_id", [':points' => $points, ':user_id' => $user_id]);

        return $update;
    }
    

    public function logInsert($points, $user_id){

        $log = $this->db->run("INSERT INTO cms_users_points_log (user_id, points, newpoints, oldpoints, timestamp, action, ip, status) VALUES(:user_id, :points, :newpoints, :oldpoints, NOW(), :action, :ip, :status)",
        [
            ':user_id' => $user_id,
            ':points' => $points,
            ':newpoints' => $this->getPoints($user_id),
            ':oldpoints' => $this->getPoints($user_id) - $points,
            ':action' => 'claim_badge',
            ':ip' => $_SERVER['REMOTE_ADDR'],
            ':status' => 'online'
        ]);

        return $log;
    }

    public function getClaimedHumanDate($user_id) {
        $claimed_human_date = $this->db->run("SELECT claimed_human_date FROM `cms_claimed_badges` WHERE user_id = :user_id", [':user_id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);

        return $claimed_human_date;
    }

    public function setProgress($user_id, $challenge_id, $challenge_category, $current_progress) {
        $progress = $this->db->run("INSERT INTO cms_challenge_progress (user_id, challenge_id, challenge_category, current_progress) VALUES (:user_id, :challenge_id, :challenge_category, :current_progress)", 
        [
            ':user_id' => $user_id,
            ':challenge_id' => $challenge_id,
            ':challenge_category' => $challenge_category,
            ':current_progress' => $current_progress
        ]);

        return $progress;
    }

    public function challengeRequirements($user_id) {
        $general_progression = $this->db->run("SELECT * FROM `site_users` WHERE id = :id", [':id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);
        
        return $general_progression;
    }

    public function membershipChallengeRequirements() {
        $membership_progression = $this->db->run("SELECT completedValue FROM `cms_badges` WHERE category = 'membership'")->fetchAll(PDO::FETCH_ASSOC);

        return $membership_progression;
    }

    public function getYearsActive($user_id) {
        $added = $this->db->run("SELECT added FROM `site_users` WHERE id = :id", [':id' => $user_id])->fetch(PDO::FETCH_ASSOC);

        $years_active = floor((time() - strtotime($added['added'])) / 60 / 60 / 24 / 365);

        return $years_active;
    }

    public function roomsReviewProgression($user_id) {
        $review_progression = $this->db->run("SELECT user_id, status FROM `cms_reviews` WHERE user_id = :id AND status = 'online'", [':id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);

        $online_reviews = count($review_progression);

        return $online_reviews;
    }

    public function roomsPlayedProgression($user_id) {
        $rooms_played_progression = $this->db->run("SELECT user_id FROM `cms_rooms_played` WHERE user_id = :id", [':id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);  
        
        $rooms_played = count($rooms_played_progression);

        return $rooms_played;
    }

    public function gamesReviewProgression($user_id) {
        $review_progression = $this->db->run("SELECT user_id, status FROM `cms_games_reviews` WHERE user_id = :id AND status = 'online'", [':id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);

        $online_reviews = count($review_progression);

        return $online_reviews;
    }

    public function gamesPlayedProgression($user_id) {
        $games_played_progression = $this->db->run("SELECT user_id FROM `cms_games_played` WHERE user_id = :id", [':id' => $user_id])->fetchAll(PDO::FETCH_ASSOC);

        $games_played = count($games_played_progression);

        return $games_played;
    }
}

