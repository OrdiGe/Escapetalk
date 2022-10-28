<?php

if($_POST['type'] == 'claimBadge')
{
    $badges = [
        1 => ["id" => 1, "title" => "profileCompleteBadge", "progress" => "1/1", "claimable" => true, "icon" => "profileCompleteBadge.svg"],
        2 => ["id" => 2, "title" => "100likesBadge", "progress" => "0/100", "claimable" => false, "icon" => "100likesBadge.svg"],
        3 => ["id" => 3, "title" => "championBadge", "progress" => "0/1", "claimable" => false, "icon" => "championBadge.svg"],
        4 => ["id" => 4, "title" => "eersteKamerReviewBadge", "progress" => "0/1", "claimable" => false, "icon" => "eersteKamerReview.svg"],
        5 => ["id" => 5, "title" => "firstGamesReviewBadge", "progress" => "0/1", "claimable" => false, "icon" => "firstGamesReview.svg"],
        6 => ["id" => 6, "title" => "foundersBadge", "progress" => "0/1", "claimable" => false, "icon" => "foundersBadge.svg"],
        7 => ["id" => 7, "title" => "halloweenBadge", "progress" => "0/1", "claimable" => false, "icon" => "halloweenBadge.svg"],
        8 => ["id" => 8, "title" => "1jaarLidBadge", "progress" => "0/1", "claimable" => false, "icon" => "1JaarLidBadge.svg"],
    ];

    $badge_id = $_POST["badgeId"];

    if($badge_id && $badges[$badge_id]["claimable"] == true)
    {
        echo json_encode($badges[$badge_id]);
    }
    else 
    {
        echo '0';
    }
}

die();
?>