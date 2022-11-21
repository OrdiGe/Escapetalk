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
        // ["id" => 1, "rankName" => "Escape Baby", "minScore" => 5],
        // ["id" => 2, "rankName" => "Escape Friend", "minScore" => 10],
        // ["id" => 3, "rankName" => "Escape Apprentice", "minScore" => 20],
        // ["id" => 4, "rankName" => "Escape Trainee", "minScore" => 35],
        // ["id" => 5, "rankName" => "Escape Newbie", "minScore" => 55],
        // ["id" => 6, "rankName" => "Escape Rookie", "minScore" => 80],
        // ["id" => 7, "rankName" => "Escape Novice", "minScore" => 110],
        // ["id" => 8, "rankName" => "Casual Escaper", "minScore" => 145],
        // ["id" => 9, "rankName" => "Escape Explorer", "minScore" => 180],
        // ["id" => 10, "rankName" => "Escape Member", "minScore" => 225],
        // ["id" => 11, "rankName" => "Established Escaper", "minScore" => 275],
        // ["id" => 12, "rankName" => "Regular Escaper", "minScore" => 330],
        // ["id" => 13, "rankName" => "Escape Enthusiast", "minScore" => 390],
        // ["id" => 14, "rankName" => "Escape Specialist", "minScore" => 1600],
        // ["id" => 15, "rankName" => "Super Escaper", "minScore" => 1600],
        // ["id" => 16, "rankName" => "Senior Escaper", "minScore" => 3200],
        // ["id" => 17, "rankName" => "Escape Pro", "minScore" => 3200],
        // ["id" => 18, "rankName" => "Escape Expert", "minScore" => 6400],
        // ["id" => 19, "rankName" => "Escape Star", "minScore" => 6400],
        // ["id" => 20, "rankName" => "Escape Mastermind", "minScore" => 6400],
        // ["id" => 21, "rankName" => "Escape Maestro", "minScore" => 6400],
        // ["id" => 22, "rankName" => "Escape Guru", "minScore" => 12800],
        // ["id" => 23, "rankName" => "Escape Ninja", "minScore" => 12800],
        // ["id" => 24, "rankName" => "Escape Genious", "minScore" => 12800],
        // ["id" => 25, "rankName" => "Escape Champion", "minScore" => 25600],
        // ["id" => 26, "rankName" => "Escape Master", "minScore" => 51200],
        // ["id" => 27, "rankName" => "Escape Hero", "minScore" => 51200],
        // ["id" => 27, "rankName" => "Escape Veteran", "minScore" => 51200],
        // ["id" => 28, "rankName" => "Escape Prodigy", "minScore" => 51200],
        // ["id" => 29, "rankName" => "Escape Legend", "minScore" => 102400],
        // ["id" => 30, "rankName" => "Escape Houdini", "minScore" => 102400],
        // ["id" => 31, "rankName" => "Escape God", "minScore" => 204800],
        // ["id" => 32, "rankName" => "Escape Enigma", "minScore" => 409600],
//     ];
    
//     var_dump($levels);
//     $return = [];

//     $levels_post = json_decode($_POST['levels']);

//     $return[] = $levels[$level];

//     echo json_encode($return);
// }

?>