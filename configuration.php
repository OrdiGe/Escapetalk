<?php

session_start();


$all_ranks = [
    0 => ["id" => 1, "rankName" => "Escape Apprentice", "minScore" => 0],
    1 => ["id" => 2, "rankName" => "Escape Newbie", "minScore" => 25],
    2 => ["id" => 3, "rankName" => "Junior Escaper", "minScore" => 50],
    3 => ["id" => 4, "rankName" => "Casual Escaper", "minScore" => 100],
    4 => ["id" => 5, "rankName" => "Advanced Escaper", "minScore" => 200],
    5 => ["id" => 6, "rankName" => "Escape Enthusiast", "minScore" => 400],
    6 => ["id" => 7, "rankName" => "Escape Specialist", "minScore" => 800],
    7 => ["id" => 8, "rankName" => "Senior Escaper", "minScore" => 1600],
    8 => ["id" => 9, "rankName" => "Escape Expert", "minScore" => 3200],
    9 => ["id" => 10, "rankName" => "Escaper Guru", "minScore" => 6400],
    10 => ["id" => 11, "rankName" => "Escaper Master", "minScore" => 12800],
    11 => ["id" => 12, "rankName" => "Escaper Champion", "minScore" => 25600],
    12 => ["id" => 13, "rankName" => "Escaper Legend", "minScore" => 51200],
    13 => ["id" => 14, "rankName" => "Escaper Enigma", "minScore" => 102400],
    14 => ["id" => 15, "rankName" => "Escaper God", "minScore" => 204800],
];

$badges = [
    1 => ["id" => 1, "title" => "Profielpagina Compleet", "description" => "Maak je profielpagina compleet!", "progress" => "1/1", "claimable" => true, "icon" => "profileCompleteBadge.svg", "claimed" => false, "expPoints" => 51, "claimedDate" => "15-11-2022"],
    2 => ["id" => 2, "title" => "Eerste Kamer Gespeeld", "description" => "Speel je eerste kamer!", "progress" => "1/1", "claimable" => true, "icon" => "firstRoomPlayedBadge.svg", "claimed" => false, "expPoints" => 15, "claimedDate" => "15-11-2022"],
    3 => ["id" => 3, "title" => "Eerste Game Gespeeld", "description" => "Speel je eerste game!", "progress" => "0/1", "claimable" => false, "icon" => "firstGamePlayedBadge.svg", "claimed" => false, "expPoints" => 15, "claimedDate" => "15-11-2022"],
    4 => ["id" => 4, "title" => "Eerste Kamer Review", "description" => "Geef je eerste review over een kamer!", "progress" => "1/1", "claimable" => true, "icon" => "firstRoomReview.svg", "claimed" => false, "expPoints" => 35, "claimedDate" => "15-11-2022"],
    5 => ["id" => 5, "title" => "Eerste Game Review", "description" => "Geef je eerste review over een game!", "progress" => "0/1", "claimable" => false, "icon" => "firstGameReview.svg", "claimed" => false, "expPoints" => 35, "claimedDate" => "15-11-2022"],
    6 => ["id" => 6, "title" => "10 Kamers In Eén Maand", "description" => "Speel 10 kamers in één maand", "progress" => "0/1", "claimable" => true, "icon" => "10RoomsOneMonth.svg", "claimed" => false, "expPoints" => 150, "claimedDate" => "15-11-2022"],
    7 => ["id" => 7, "title" => "1 Jaar Lid", "description" => "Bedankt dat je al één jaar lid van ons bent!", "progress" => "0/1", "claimable" => false, "icon" => "1yearMemberBadge.svg", "claimed" => false, "expPoints" => 250, "claimedDate" => "15-11-2022"],
    8 => ["id" => 8, "title" => "Spooky Ontsnapping", "description" => "Speel een kamer tijdens Halloween!", "progress" => "0/1", "claimable" => true, "icon" => "halloweenBadge.svg", "claimed" => false, "expPoints" => 76, "claimedDate" => "15-11-2022"],
    
];

function getProfileData()
{
    global $all_ranks;

    if(isset($_SESSION['points']))
    {
        $points = $_SESSION['points'];
    }
    else
    {
        $points = $_SESSION['points'] = 0;
    }
    
    $return = ['rankName' => '', 'current_points' => $points, 'next_rank_points' => 0, 'percentage' => 0];
    foreach($all_ranks as $key => $rank)
    {
        if($points >= $rank['minScore'])
        {
            $return['rankName'] = $rank['rankName'];
            $currentRoleIndex = $key;
        }
        else
        {
            break;
        }
    }
    
    $return['next_rank_points'] = $all_ranks[$currentRoleIndex + 1]['minScore'];

    $return['percentage'] = $points / $return['next_rank_points'] * 100;

    return $return;
}

?>