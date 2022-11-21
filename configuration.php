<?php

session_start();


$all_ranks = [
    0 => ["id" => 1, "name" => "Escape Apprentice", "minScore" => 0],
    1 => ["id" => 2, "name" => "Escape Newbie", "minScore" => 25],
    2 => ["id" => 3, "name" => "Junior Escaper", "minScore" => 75],
    3 => ["id" => 4, "name" => "Casual Escaper", "minScore" => 175],
    4 => ["id" => 5, "name" => "Advanced Escaper", "minScore" => 375],
    5 => ["id" => 6, "name" => "Escape Enthusiast", "minScore" => 775],
    6 => ["id" => 7, "name" => "Escape Specialist", "minScore" => 1575],
    7 => ["id" => 8, "name" => "Senior Escaper", "minScore" => 3175],
    8 => ["id" => 9, "name" => "Escape Expert", "minScore" => 6375],
    9 => ["id" => 10, "name" => "Escaper Guru", "minScore" => 12775],
    10 => ["id" => 11, "name" => "Escaper Master", "minScore" => 25575],
    11 => ["id" => 12, "name" => "Escaper Champion", "minScore" => 51175],
    12 => ["id" => 13, "name" => "Escaper Legend", "minScore" => 102375],
    13 => ["id" => 14, "name" => "Escaper Enigma", "minScore" => 204775],
    14 => ["id" => 15, "name" => "Escaper God", "minScore" => 409575],
];

$badges = [
    1 => ["id" => 1, "title" => "Profielpagina Compleet", "description" => "Maak je profielpagina compleet!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "profileCompleteBadge.svg", "claimed" => true, "expPoints" => 51],
    2 => ["id" => 2, "title" => "Eerste Kamer Gespeeld", "description" => "Speel je eerste kamer!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstRoomPlayedBadge.svg", "claimed" => true, "expPoints" => 15],
    3 => ["id" => 3, "title" => "Eerste Game Gespeeld", "description" => "Speel je eerste game!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstGamePlayedBadge.svg", "claimed" => false, "expPoints" => 15],
    4 => ["id" => 4, "title" => "Eerste Kamer Review", "description" => "Geef je eerste review over een kamer!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "firstRoomReview.svg", "claimed" => false, "expPoints" => 35, "claimedDate" => "15-11-2022"],
    5 => ["id" => 5, "title" => "Eerste Game Review", "description" => "Geef je eerste review over een game!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstGameReview.svg", "claimed" => false, "expPoints" => 35],
    6 => ["id" => 6, "title" => "10 Kamers In Eén Maand", "description" => "Speel 10 kamers in één maand", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "10RoomsOneMonth.svg", "claimed" => false, "expPoints" => 150],
    7 => ["id" => 7, "title" => "1 Jaar Lid", "description" => "Bedankt dat je al één jaar lid van ons bent!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "1yearMemberBadge.svg", "claimed" => false, "expPoints" => 250],
    8 => ["id" => 8, "title" => "Spooky Ontsnapping", "description" => "Speel een kamer tijdens Halloween!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "halloweenBadge.svg", "claimed" => false, "expPoints" => 76, "claimedDate" => "15-11-2022"],
    
];

function getProfileData()
{
    global $all_ranks;
    global $badges;



    if(isset($_SESSION['points']))
    {
        foreach($badges as $badge) 
        {
            if($badge['claimed'] == true)
            {
                $points = $_SESSION['points'] + $badge['expPoints'];
            }
            else
            {
                $points = $_SESSION['points'];
            }
        }
    }
    else
    {
        $points = $_SESSION['points'] = 0;
    }
    
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
    
    $return['current_rank_points'] = $all_ranks[$currentRoleIndex]['minScore'];

    $return['next_rank_points'] = $all_ranks[$currentRoleIndex + 1]['minScore'];

    $return['points_diff'] = $return['current_points'] - $return['current_rank_points'];

    $return['rank_points_diff'] = $return['next_rank_points'] - $return['current_rank_points'];

    $return['percentage'] = ($points - $return['current_rank_points']) / ($return['next_rank_points'] - $return['current_rank_points']) * 100;

    return $return;
}

?>