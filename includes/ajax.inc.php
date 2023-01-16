<?php


include('../configuration.php');
include_once('../class/class.php');
include_once('../class/class.pdo.php');
include_once('../dbcon.php');

$points = $class->getPoints($user_id);

if($_POST['type'] == 'claimBadges')
{
    $return = ['badges' => []];

    $badges_post = json_decode($_POST['badges']); 
    

    $user_badges = $class->getClaimedBadges($user_id);
    foreach($badges_post as $badge)
    {
        $class->claimBadge($badge, $user_id);      
    }    


    $claimed_badge = $class->getAllClaimedBadges($badges_post);
    $claimed_human_date = $class->getClaimedHumanDate($user_id);

    foreach($claimed_badge as $badge)
    {
        foreach($claimed_human_date as $claim_date)
        {
            $badge['date'] = $claim_date['claimed_human_date'];
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