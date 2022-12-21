<?php


include('../configuration.php');
include_once('../class/class.php');
include_once('../class/class.pdo.php');
include_once('../dbcon.php');

$user_id = 2;
$points = $class->getPoints($user_id);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST['type'] == 'claimBadges')
{
    $return = ['badges' => []];

    $badges_post = json_decode($_POST['badges']); 
    

    $user_badges = $class->getClaimedBadges($user_id);
    foreach($badges_post as $badge)
    {

        $class->claimBadge($badge, $user_id);      

// $claimed_badges = $class->get_claimed_badges($user_id);

        //     foreach($claimed_badges as $badge) {
        //         echo $badge['title'];
        //     }
        // if(isset($badges[$badge]))
        // {
            
        //     $_SESSION['badges'][$badge]['claimed'] = true;
        //     $_SESSION['badges'][$badge]['claimable'] = false;
        //     $_SESSION['badges'][$badge]['claimedTime'] = time();
        //     $_SESSION['badges'][$badge]['claimedDate'] = date("d-m-y H:i");
        //     uasort($_SESSION['badges'], function($a, $b) {
        //         if ($a['claimedTime'] == $b['claimedTime'] && $a['id'] == $b['id']) {
        //             return 0;
        //         }
        //         return ($a['claimedTime'] > $b['claimedTime'] && $a['id'] > $b['id']) ? -1 : 1;
        //     });

        //     $badges[$badge]['claimable'] = false;
        //     $badges[$badge]['claimed'] = true;

        //     $return['badges'][] = $badges[$badge];
            
        //     $_SESSION['points'] += $badges[$badge]['expPoints'];
// }
    }    


    $claimed_badge = $class->getAllClaimedBadges($badges_post);
    $claimed_human_date = $class->getClaimedHumanDate($user_id);

    foreach($claimed_badge as $badge)
    {
        foreach($claimed_human_date as $claim_date)
        {
           // if($badge->uid == $user->id){ 
                $badge['date'] = $claim_date['claimed_human_date'];
            //}
        }
        $claimed_array[] = $badge; 
    }

    foreach($claimed_array as $badges)
    {
        $return['badges'][$badges['id']]['id'] = $badges['id'];
        $return['badges'][$badges['id']]['title'] = $badges['title'];
        $return['badges'][$badges['id']]['description'] = $badges['description'];
        $return['badges'][$badges['id']]['points'] = $badges['points'];
        $return['badges'][$badges['id']]['icon'] = $badges['icon'];
        $return['badges'][$badges['id']]['claimed_human_date'] = $badge['date'];

        $update_points = $class->awardPoints($badges['points'], $user_id);
        $log_insert = $class->logInsert($badges['points'], $user_id);
    }

    $return['rank'] = getProfileData();
    
    echo json_encode($return);

}

if($_POST['type'] == 'placeGameReview') {

    $game_review_insert = $class->gameReviewInsert($user_id);

    echo json_encode('PHP is working');
}

// $return = [['badge1'], ['badge2'], ['badge3']];


    // $return = ["badges" => [['badge1'], ['badge2'], ['badge3']], 'new_rank' => 'Junior escaper'];

    // if($_POST['type'] == 'levelUp')
    // {
    //     $levels = [
            // 1 => ["id" => 1, "rankName" => "Escape Baby", "minScore" => 5],
            // 2 => ["id" => 2, "rankName" => "Escape Friend", "minScore" => 10],
            // 3 => ["id" => 3, "rankName" => "Escape Apprentice", "minScore" => 20],
            // 4 => ["id" => 4, "rankName" => "Escape Trainee", "minScore" => 35],
            // 5 => ["id" => 5, "rankName" => "Escape Newbie", "minScore" => 55],
            // 6 => ["id" => 6, "rankName" => "Escape Rookie", "minScore" => 80],
            // 7 => ["id" => 7, "rankName" => "Escape Novice", "minScore" => 110],
            // 8 => ["id" => 8, "rankName" => "Casual Escaper", "minScore" => 145],
            // 9 => ["id" => 9, "rankName" => "Escape Explorer", "minScore" => 185],
            // 10 => ["id" => 10, "rankName" => "Escape Member", "minScore" => 230],
            // 11 => ["id" => 11, "rankName" => "Established Escaper", "minScore" => 280],
            // 12 => ["id" => 12, "rankName" => "Regular Escaper", "minScore" => 335],
            // 13 => ["id" => 13, "rankName" => "Escape Enthusiast", "minScore" => 395],
            // 14 => ["id" => 14, "rankName" => "Escape Specialist", "minScore" => 460],
            // 15 => ["id" => 15, "rankName" => "Super Escaper", "minScore" => 530],
            // 16 => ["id" => 16, "rankName" => "Senior Escaper", "minScore" => 605],
            // 17 => ["id" => 17, "rankName" => "Escape Pro", "minScore" => 685],
            // 18 => ["id" => 18, "rankName" => "Escape Expert", "minScore" => 770],
            // 19 => ["id" => 19, "rankName" => "Escape Star", "minScore" => 860],
            // 20 => ["id" => 20, "rankName" => "Escape Mastermind", "minScore" => 955],
            // 21 => ["id" => 21, "rankName" => "Escape Maestro", "minScore" => 1055],
            // 22 => ["id" => 22, "rankName" => "Escape Guru", "minScore" => 1160],
            // 23 => ["id" => 23, "rankName" => "Escape Ninja", "minScore" => 1270],
            // 24 => ["id" => 24, "rankName" => "Escape Genious", "minScore" => 1385],
            // 25 => ["id" => 25, "rankName" => "Escape Champion", "minScore" => 1505],
            // 26 => ["id" => 26, "rankName" => "Escape Master", "minScore" => 1630],
            // 27 => ["id" => 27, "rankName" => "Escape Hero", "minScore" => 1760],
            // 28 => ["id" => 28, "rankName" => "Escape Veteran", "minScore" => 1895],
            // 29 => ["id" => 29, "rankName" => "Escape Prodigy", "minScore" => 2035],
            // 30 => ["id" => 30, "rankName" => "Escape Legend", "minScore" => 2180],
            // 31 => ["id" => 31, "rankName" => "Escape Houdini", "minScore" => 2330],
            // 32 => ["id" => 32, "rankName" => "Escape God", "minScore" => 2485],
            // 33 => ["id" => 33, "rankName" => "Escape Enigma", "minScore" => 2645],
    //     ];
        
    //     var_dump($levels);
    //     $return = [];

    //     $levels_post = json_decode($_POST['levels']);

    //     $return[] = $levels[$level];

    //     echo json_encode($return);
// }

