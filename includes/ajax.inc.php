<?php

if($_POST['type'] == 'claimBadges')
{
    $badges = [
        1 => ["id" => 1, "title" => "profileCompleteBadge", "progress" => "1/1", "claimable" => true, "icon" => "profileCompleteBadge.svg", "claimed" => false, "expPoints" => 10],
        2 => ["id" => 2, "title" => "firstRoomPlayedBadge", "progress" => "1/1", "claimable" => true, "icon" => "firstRoomPlayedBadge.svg", "claimed" => false, "expPoints" => 15],
        3 => ["id" => 3, "title" => "firstGamePlayedBadge", "progress" => "0/1", "claimable" => false, "icon" => "firstGamePlayedBadge.svg", "claimed" => false, "expPoints" => 15],
        4 => ["id" => 4, "title" => "firstRoomReviewBadge", "progress" => "1/1", "claimable" => true, "icon" => "firstRoomReview.svg", "claimed" => false, "expPoints" => 35],
        5 => ["id" => 5, "title" => "firstGameReviewBadge", "progress" => "0/1", "claimable" => false, "icon" => "firstGameReview.svg", "claimed" => false, "expPoints" => 35],
        6 => ["id" => 6, "title" => "10RoomsOneMonth", "progress" => "0/1", "claimable" => true, "icon" => "10RoomsOneMonth.svg", "claimed" => false, "expPoints" => 150],
        7 => ["id" => 7, "title" => "1yearMemberBadge", "progress" => "0/1", "claimable" => false, "icon" => "1yearMemberBadge.svg", "claimed" => false, "expPoints" => 250],
        8 => ["id" => 8, "title" => "halloweenBadge", "progress" => "0/1", "claimable" => true, "icon" => "halloweenBadge.svg", "claimed" => false, "expPoints" => 75],
        
    ];

    $return = [];

    $badges_post = json_decode($_POST['badges']);



    foreach($badges_post as $badge)
    {
        if(isset($badges[$badge]) && $badges[$badge]['claimable'] == true && $badges[$badge]['claimed'] == false)
        {
            $badges[$badge]['claimable'] = false;
            $badges[$badge]['claimed'] = true;
            $return[] = $badges[$badge];
        }
        else if(isset($badges[$badge]) && $badges[$badge]['claimable'] == false && $badges[$badge]['claimed'] == true)
        {

            $return = [];
        }
    }

    echo json_encode($return);

    die();
}

?>


<!-- // 1 claim 

$items = [$id];


//claimall 

loop over alle beschikbare,  en zet die allemaal in array

var items = [];

foreach(claimable as id)
{
    items.push(id);

} -->