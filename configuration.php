<?php

include_once('dbcon.php');
include_once('class/class.php');
include_once('class/class.pdo.php');

$class = new Queries($db);

$user_id = 2159;

$all_ranks = $class->getRanks();

$all_badges = $class->getBadges();

$all_badges_process = $class->getBadgesProcessForUser($all_badges, $user_id);

$review_requirement = $class->roomsReviewProgression($user_id);

function getProfileData()
{
    global $all_ranks;
    global $points;
    global $user_id;
    global $class;
    $points = $class->getPoints($user_id);    
    
    $return = ['name' => '', 'current_points' => $points, 'current_rank_points' => 0, 'next_rank_points' => 0, 'percentage' => 0, 'rank_points_diff' => 0, 'points_diff' => 0];

    foreach($all_ranks as $key => $rank)
    {
        if($points >= $rank['minScore'])
        {
            $return['name'] = $rank['name'];
            $currentRoleIndex = $key;
        }
        else
        {
            break;
        }
    }

    $return['current_points'] = $points;
    
    $return['current_rank_points'] = $all_ranks[$currentRoleIndex]['minScore'];
    

    $return['next_rank_points'] = $all_ranks[$currentRoleIndex + 1]['minScore'];

    $return['points_diff'] = $return['current_points'] - $return['current_rank_points'];

    $return['rank_points_diff'] = $return['next_rank_points'] - $return['current_rank_points'];

    $return['percentage'] = ($return['points_diff'] / $return['rank_points_diff']) * 100;

    return $return;
}