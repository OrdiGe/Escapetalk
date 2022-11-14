<?php
    $levels = [
        1 => ["id" => 1, "rankName" => "Escape Apprentice"],
        2 => ["id" => 2, "rankName" => "Escape Newbie"],
        3 => ["id" => 3, "rankName" => "Junior Escaper"],
        4 => ["id" => 4, "rankName" => "Escaper"],
        5 => ["id" => 5, "rankName" => "Advanced Escaper"],
        6 => ["id" => 6, "rankName" => "Escape Enthusiast"],
        7 => ["id" => 7, "rankName" => "Escape Specialist"],
        8 => ["id" => 8, "rankName" => "Senior Escaper"],
        9 => ["id" => 9, "rankName" => "Escape Expert"],
        10 => ["id" => 10, "rankName" => "Escaper Guru"],
        11 => ["id" => 11, "rankName" => "Escaper Master"],
        12 => ["id" => 12, "rankName" => "Escaper Champion"],
        13 => ["id" => 13, "rankName" => "Escaper Legend"],
        14 => ["id" => 14, "rankName" => "Escaper Enigma"],
        15 => ["id" => 15, "rankName" => "Escaper God"],
    ];

    $return = [];

    $levels_post = json_decode($_POST['levels']);

    $return[] = $levels[$level];

    echo json_encode($return);

    var_dump($levels);
?>