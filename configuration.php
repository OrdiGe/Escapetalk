<?php

include_once('dbcon.php');
include_once('class/class.php');
include_once('class/class.pdo.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$class = new Queries($db);

$user_id = 2;

$all_ranks = $class->getRanks();

$all_badges = $class->getBadges();
// $all_completedValues = $class->getChallengeProgression();
$all_badges_process = $class->getBadgesProcessForUser($all_badges, $user_id);

$review_requirement = $class->roomsReviewProgression($user_id);



// foreach($all_ranks as $rank)
    // {
    //     echo $rank->rank_id.'&nbsp';
    //     echo $rank->title.'&nbsp';
    //     echo $rank->points.'<br>';
    // }
    // echo '<br>';
    // foreach($all_badges as $badge)
    // {
    //     echo $badge->id.'&nbsp';
    //     echo $badge->title.'&nbsp';
    //     echo $badge->description.'&nbsp';
    //     echo $badge->points.'<br>';
// }

//  $all_ranks_original = [
    //     0 => ["id" => 1, "name" => "Escape Baby", "minScore" => 0], 
    //     1 => ["id" => 2, "name" => "Escape Friend", "minScore" => 10],
    //     2 => ["id" => 3, "name" => "Escape Apprentice", "minScore" => 20], //
    //     //2 => ["id" => 3, "name" => "Junior Escaper", "minScore" => 25], //
    //     3 => ["id" => 4, "name" => "Escape Trainee", "minScore" => 40],
    //     4 => ["id" => 5, "name" => "Escape Newbie", "minScore" => 80],
    //     5 => ["id" => 6, "name" => "Escape Rookie", "minScore" => 160],
    //     6 => ["id" => 7, "name" => "Escape Novice", "minScore" => 320],
    //     7 => ["id" => 8, "name" => "Casual Escaper", "minScore" => 640],//
    //     8 => ["id" => 9, "name" => "Escape Explorer", "minScore" => 1280],
    //     9 => ["id" => 10, "name" => "Escape Member", "minScore" => 2560],
    //     10 => ["id" => 11, "name" => "Established Escaper", "minScore" => 5120],
    //     11 => ["id" => 12, "name" => "Regular Escaper", "minScore" => 10240],
    //     12 => ["id" => 13, "name" => "Escape Enthusiast", "minScore" => 20480],
    //     13 => ["id" => 14, "name" => "Escape Specialist", "minScore" => 40960],
    //     14 => ["id" => 15, "name" => "Super Escaper", "minScore" => 81920],
    //     15 => ["id" => 16, "name" => "Senior Escaper", "minScore" => 163840],//
    //     16 => ["id" => 17, "name" => "Escape Pro", "minScore" => 327680],
    //     17 => ["id" => 18, "name" => "Escape Expert", "minScore" => 655360],//
    //     18 => ["id" => 19, "name" => "Escape Star", "minScore" => 1310720],
    //     19 => ["id" => 20, "name" => "Escape Mastermind", "minScore" => 2621440],
    //     20 => ["id" => 21, "name" => "Escape Maestro", "minScore" => 5242880],
    //     21 => ["id" => 22, "name" => "Escape Guru", "minScore" => 10485760],//
    //     22 => ["id" => 23, "name" => "Escape Ninja", "minScore" => 20971520],
    //     23 => ["id" => 24, "name" => "Escape Genious", "minScore" => 41943040],
    //     24 => ["id" => 25, "name" => "Escape Champion", "minScore" => 83886080],
    //     25 => ["id" => 26, "name" => "Escape Master", "minScore" => 167772160],//
    //     26 => ["id" => 27, "name" => "Escape Hero", "minScore" => 335544320],
    //     27 => ["id" => 28, "name" => "Escape Veteran", "minScore" => 671088640],
    //     28 => ["id" => 29, "name" => "Escape Prodigy", "minScore" => 1342177280],
    //     29 => ["id" => 30, "name" => "Escape Legend", "minScore" => 2684354560],//
    //     30 => ["id" => 31, "name" => "Escape Houdini", "minScore" => 5368709120],
    //     31 => ["id" => 32, "name" => "Escape God", "minScore" => 10737418240],
    //     32 => ["id" => 33, "name" => "Escape Enigma", "minScore" => 21474836480],//
// ];

// $badges = [
    //     1 => ["id" => 1, "title" => "Profielpagina Compleet", "description" => "Maak je profielpagina compleet!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "profileCompleteBadge.svg", "claimed" => true, "expPoints" => 51, "claimedTime" => "1668502603", "claimedDate" => "15-11-2022 09:56"],
    //     2 => ["id" => 2, "title" => "Eerste Kamer Gespeeld", "description" => "Speel je eerste kamer!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstRoomPlayedBadge.svg", "claimed" => true, "expPoints" => 15, "claimedTime" => "1668502605", "claimedDate" => "15-11-2022 09:56"],
    //     3 => ["id" => 3, "title" => "Eerste Game Gespeeld", "description" => "Speel je eerste game!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstGamePlayedBadge.svg", "claimed" => false, "expPoints" => 15, "claimedTime" => "", "claimedDate" => ""],
    //     4 => ["id" => 4, "title" => "Eerste Kamer Review", "description" => "Geef je eerste review over een kamer!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "firstRoomReview.svg", "claimed" => false, "expPoints" => 35, "claimedTime" => "", "claimedDate" => ""],
    //     5 => ["id" => 5, "title" => "Eerste Game Review", "description" => "Geef je eerste review over een game!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstGameReview.svg", "claimed" => false, "expPoints" => 35, "claimedTime" => "", "claimedDate" => ""],
    //     6 => ["id" => 6, "title" => "10 Kamers In Eén Maand", "description" => "Speel 10 kamers in één maand", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "10RoomsOneMonth.svg", "claimed" => false, "expPoints" => 150, "claimedTime" => "", "claimedDate" => ""],
    //     7 => ["id" => 7, "title" => "1 Jaar Lid", "description" => "Bedankt dat je al één jaar lid van ons bent!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "1yearMemberBadge.svg", "claimed" => false, "expPoints" => 250, "claimedTime" => "", "claimedDate" => ""],
    //     8 => ["id" => 8, "title" => "Spooky Ontsnapping", "description" => "Speel een kamer tijdens Halloween!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "halloweenBadge.svg", "claimed" => false, "expPoints" => 76, "claimedTime" => "", "claimedDate" => ""],
// ];

// uasort($all_badges, function($a, $b) {
    //     if ($a['claimedTime'] == $b['claimedTime']) {
    //         return 0;
    //     }
    //     return ($a['claimedTime'] > $b['claimedTime']) ? -1 : 1;
// });

function getProfileData()
{
    global $all_ranks;
    global $points;
    global $user_id;
    global $class;
    $points = $class->getPoints($user_id);

    // print_r($all_badges);
    
    
    $return = ['name' => '', 'current_points' => $points, 'current_rank_points' => 0, 'next_rank_points' => 0, 'percentage' => 0, 'rank_points_diff' => 0, 'points_diff' => 0];
    
    // foreach($all_badges as $badge)
        // {
        //     if($badge['claimed'] == true)
        //     {
        //         $points += $badge['expPoints'];
        //     }
    // }
    
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

// function getChallengeProgression() {
//     global $all_badges;
//     global $all_badges_process;
//     global $points;
//     global $user_id;
//     global $class;

//     $points = $class->getPoints($user_id);

//     //$added_date = $class->getYearsActive($user_id);

//     //$difference = floor((time() - strtotime($added_date['added'])) / 60 / 60 / 24 / 365);

//     $return = ['currentProgression' => 0, 'neededProgression' => 0, 'percentage' => 0];

//     foreach($all_badges as $key => $badge)
//     {
//         $badgeIndex = $key;
//     }

//     $return['neededProgression'] = $all_badges[$badgeIndex]['progress']['challengeCompletedValue'];
//     $return['currentProgression'] = $difference;
//     $return['percentage'] = ($return['currentProgression'] / $return['neededProgression']) * 100;

//     $setProgress = $class->setProgress($user_id, $all_badges[$badgeIndex]['id'], $all_badges[$badgeIndex]['category'], $return['currentProgression']);
    
//     return $return;
// }

// function getMembershipProgression() {
//     global $class;
//     global $user_id;

//     $return = ['currentProgression' => 0, 'neededProgression' => 0, 'percentage' => 0];

//     foreach($membershipCompletedvalue as $key => $value)
//     {
//         $return['neededProgression'] = $value['completedValue'];
//         $return['currentProgression'] = $difference;
//         $return['percentage'] = ($return['currentProgression'] / $return['neededProgression']) * 100;
    
//         print_r($return);
//     }


// }

// getMembershipProgression();