<?php

session_start();


$all_ranks = [
    0 => ["id" => 1, "name" => "Escape Baby", "minScore" => 0],
    1 => ["id" => 2, "name" => "Escape Friend", "minScore" => 10],
    2 => ["id" => 3, "name" => "Escape Apprentice", "minScore" => 20],
    3 => ["id" => 4, "name" => "Escape Trainee", "minScore" => 35],
    4 => ["id" => 5, "name" => "Escape Newbie", "minScore" => 55],
    5 => ["id" => 6, "name" => "Escape Rookie", "minScore" => 80],
    6 => ["id" => 7, "name" => "Escape Novice", "minScore" => 110],
    7 => ["id" => 8, "name" => "Casual Escaper", "minScore" => 145],
    8 => ["id" => 9, "name" => "Escape Explorer", "minScore" => 185],
    9 => ["id" => 10, "name" => "Escape Member", "minScore" => 230],
    10 => ["id" => 11, "name" => "Established Escaper", "minScore" => 280],
    11 => ["id" => 12, "name" => "Regular Escaper", "minScore" => 335],
    12 => ["id" => 13, "name" => "Escape Enthusiast", "minScore" => 395],
    13 => ["id" => 14, "name" => "Escape Specialist", "minScore" => 460],
    14 => ["id" => 15, "name" => "Super Escaper", "minScore" => 530],
    15 => ["id" => 16, "name" => "Senior Escaper", "minScore" => 605],
    16 => ["id" => 17, "name" => "Escape Pro", "minScore" => 685],
    17 => ["id" => 18, "name" => "Escape Expert", "minScore" => 770],
    18 => ["id" => 19, "name" => "Escape Star", "minScore" => 860],
    19 => ["id" => 20, "name" => "Escape Mastermind", "minScore" => 955],
    20 => ["id" => 21, "name" => "Escape Maestro", "minScore" => 1055],
    21 => ["id" => 22, "name" => "Escape Guru", "minScore" => 1160],
    22 => ["id" => 23, "name" => "Escape Ninja", "minScore" => 1270],
    23 => ["id" => 24, "name" => "Escape Genious", "minScore" => 1385],
    24 => ["id" => 25, "name" => "Escape Champion", "minScore" => 1505],
    25 => ["id" => 26, "name" => "Escape Master", "minScore" => 1630],
    26 => ["id" => 27, "name" => "Escape Hero", "minScore" => 1760],
    27 => ["id" => 28, "name" => "Escape Veteran", "minScore" => 1895],
    28 => ["id" => 29, "name" => "Escape Prodigy", "minScore" => 2035],
    29 => ["id" => 30, "name" => "Escape Legend", "minScore" => 2180],
    30 => ["id" => 31, "name" => "Escape Houdini", "minScore" => 2330],
    31 => ["id" => 32, "name" => "Escape God", "minScore" => 2485],
    32 => ["id" => 33, "name" => "Escape Enigma", "minScore" => 2645],
    // 0 => ["id" => 1, "name" => "Escape Apprentice", "minScore" => 0],
    // 1 => ["id" => 2, "name" => "Escape Newbie", "minScore" => 25],
    // 2 => ["id" => 3, "name" => "Junior Escaper", "minScore" => 75],
    // 3 => ["id" => 4, "name" => "Casual Escaper", "minScore" => 175],
    // 4 => ["id" => 5, "name" => "Advanced Escaper", "minScore" => 375],
    // 5 => ["id" => 6, "name" => "Escape Enthusiast", "minScore" => 775],
    // 6 => ["id" => 7, "name" => "Escape Specialist", "minScore" => 1575],
    // 7 => ["id" => 8, "name" => "Senior Escaper", "minScore" => 3175],
    // 8 => ["id" => 9, "name" => "Escape Expert", "minScore" => 6375],
    // 9 => ["id" => 10, "name" => "Escaper Guru", "minScore" => 12775],
    // 10 => ["id" => 11, "name" => "Escaper Master", "minScore" => 25575],
    // 11 => ["id" => 12, "name" => "Escaper Champion", "minScore" => 51175],
    // 12 => ["id" => 13, "name" => "Escaper Legend", "minScore" => 102375],
    // 13 => ["id" => 14, "name" => "Escaper Enigma", "minScore" => 204775],
    // 14 => ["id" => 15, "name" => "Escaper God", "minScore" => 409575],
];

$badges = [
    1 => ["id" => 1, "title" => "Profielpagina Compleet", "description" => "Maak je profielpagina compleet!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "profileCompleteBadge.svg", "claimed" => true, "expPoints" => 51, "claimedDate" => "15-11-2022"],
    2 => ["id" => 2, "title" => "Eerste Kamer Gespeeld", "description" => "Speel je eerste kamer!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstRoomPlayedBadge.svg", "claimed" => true, "expPoints" => 15, "claimedDate" => "15-11-2022"],
    3 => ["id" => 3, "title" => "Eerste Game Gespeeld", "description" => "Speel je eerste game!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstGamePlayedBadge.svg", "claimed" => false, "expPoints" => 15, "claimedDate" => date("d-m-y"), "claimedDate" => date("d-m-y")],
    4 => ["id" => 4, "title" => "Eerste Kamer Review", "description" => "Geef je eerste review over een kamer!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "firstRoomReview.svg", "claimed" => false, "expPoints" => 35, "claimedDate" => date("d-m-y")],
    5 => ["id" => 5, "title" => "Eerste Game Review", "description" => "Geef je eerste review over een game!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "firstGameReview.svg", "claimed" => false, "expPoints" => 35, "claimedDate" => date("d-m-y")],
    6 => ["id" => 6, "title" => "10 Kamers In Eén Maand", "description" => "Speel 10 kamers in één maand", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "10RoomsOneMonth.svg", "claimed" => false, "expPoints" => 150, "claimedDate" => date("d-m-y")],
    7 => ["id" => 7, "title" => "1 Jaar Lid", "description" => "Bedankt dat je al één jaar lid van ons bent!", "progress" => ["currentValue" => 0, "challengeCompletedValue" => 1], "claimable" => false, "icon" => "1yearMemberBadge.svg", "claimed" => false, "expPoints" => 250, "claimedDate" => date("d-m-y")],
    8 => ["id" => 8, "title" => "Spooky Ontsnapping", "description" => "Speel een kamer tijdens Halloween!", "progress" => ["currentValue" => 1, "challengeCompletedValue" => 1], "claimable" => true, "icon" => "halloweenBadge.svg", "claimed" => false, "expPoints" => 76, "claimedDate" => date("d-m-y")],
    
];

function getProfileData()
{
    global $all_ranks;
    global $badges;



    if(isset($_SESSION['points']))
    {
        $points = $_SESSION['points'];
    }
    else
    {
        foreach($badges as $badge)
        {
            if($badge['claimed'] == true)
            {
                $points = $_SESSION['points'] += $badge['expPoints'];
            }
        }
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