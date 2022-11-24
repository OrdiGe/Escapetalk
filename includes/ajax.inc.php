<?php


include('../configuration.php');


if($_POST['type'] == 'claimBadges')
{
    $return = ['badges' => []];

    $badges_post = json_decode($_POST['badges']); 


    foreach($badges_post as $badge)
    {

        if(isset($badges[$badge]) && $badges[$badge]['claimable'] == true && $badges[$badge]['claimed'] == false)
        {
            $badges[$badge]['claimable'] = false;
            $badges[$badge]['claimed'] = true;
            $return['badges'][] = $badges[$badge];
            
            foreach($badges as $badge)
            {
                if($badge['claimed'] == true)
                {
                    $_SESSION['claimed_challenges'][] = $badges[$badge];
                    $return['claimed_challenges'] = $_SESSION['claimed_challenges'];
                }
            }
            



            $_SESSION['points'] += $badges[$badge]['expPoints'];
        }
    }

    $return['rank'] = getProfileData();
    
    echo json_encode($return);

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

?>