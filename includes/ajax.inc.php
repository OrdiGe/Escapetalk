<?php

if($_POST['type'] == 'claimBadges')
{
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



    $return = ['badges' => [], 'new_rank' => []];

    $badges_post = json_decode($_POST['badges']);

    

    foreach($badges_post as $badge)
    {
        if(isset($badges[$badge]) && $badges[$badge]['claimable'] == true && $badges[$badge]['claimed'] == false)
        {
            $badges[$badge]['claimable'] = false;
            $badges[$badge]['claimed'] = true;
            $return['badges'][] = $badges[$badge];
        }
        else if(isset($badges[$badge]) && $badges[$badge]['claimable'] == false && $badges[$badge]['claimed'] == true)
        {

            $return = [];
        }
    }

    $new_rank = [
        ["id" => 1, "rankName" => "Escape Apprentice", "minScore" => 25],
        ["id" => 2, "rankName" => "Escape Newbie", "minScore" => 50],
        ["id" => 3, "rankName" => "Junior Escaper", "minScore" => 100],
        ["id" => 4, "rankName" => "Escaper", "minScore" => 200],
        ["id" => 5, "rankName" => "Advanced Escaper", "minScore" => 400],
        ["id" => 6, "rankName" => "Escape Enthusiast", "minScore" => 800],
        ["id" => 7, "rankName" => "Escape Specialist", "minScore" => 1600],
        ["id" => 8, "rankName" => "Senior Escaper", "minScore" => 3200],
        ["id" => 9, "rankName" => "Escape Expert", "minScore" => 6400],
        ["id" => 10, "rankName" => "Escaper Guru", "minScore" => 12800],
        ["id" => 11, "rankName" => "Escaper Master", "minScore" => 25600],
        ["id" => 12, "rankName" => "Escaper Champion", "minScore" => 51200],
        ["id" => 13, "rankName" => "Escaper Legend", "minScore" => 102400],
        ["id" => 14, "rankName" => "Escaper Enigma", "minScore" => 204800],
        ["id" => 15, "rankName" => "Escaper God", "minScore" => 409600],
    ];

    $return['new_rank'][] = $new_rank;

    echo json_encode($return);

}

// $return = [['badge1'], ['badge2'], ['badge3']];


// $return = ["badges" => [['badge1'], ['badge2'], ['badge3']], 'new_rank' => 'Junior escaper'];

// if($_POST['type'] == 'levelUp')
// {
//     $levels = [
//         1 => ["id" => 1, "rankName" => "Escape Apprentice"],
//         2 => ["id" => 2, "rankName" => "Escape Newbie"],
//         3 => ["id" => 3, "rankName" => "Junior Escaper"],
//         4 => ["id" => 4, "rankName" => "Escaper"],
//         5 => ["id" => 5, "rankName" => "Advanced Escaper"],
//         6 => ["id" => 6, "rankName" => "Escape Enthusiast"],
//         7 => ["id" => 7, "rankName" => "Escape Specialist"],
//         8 => ["id" => 8, "rankName" => "Senior Escaper"],
//         9 => ["id" => 9, "rankName" => "Escape Expert"],
//         10 => ["id" => 10, "rankName" => "Escaper Guru"],
//         11 => ["id" => 11, "rankName" => "Escaper Master"],
//         12 => ["id" => 12, "rankName" => "Escaper Champion"],
//         13 => ["id" => 13, "rankName" => "Escaper Legend"],
//         14 => ["id" => 14, "rankName" => "Escaper Enigma"],
//         15 => ["id" => 15, "rankName" => "Escaper God"],
//     ];
    
//     var_dump($levels);
//     $return = [];

//     $levels_post = json_decode($_POST['levels']);

//     $return[] = $levels[$level];

//     echo json_encode($return);
// }

?>