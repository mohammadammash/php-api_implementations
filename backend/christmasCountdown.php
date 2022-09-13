<?php

    // use of built-in class(DateTime) by making an instance of to find the difference between two dates
    function findDaysToChristmas(){
    $now = new DateTime("now");
    $christmas = new DateTime("25 Dec 2022");
    $days_left_christmas = $now->diff($christmas);

    return $days_left_christmas;
    }

// turn the returned value to JSON then decode it to be able to access the values
$json = json_encode(findDaysToChristmas());
$daysLeft = json_decode($json, true)["days"];
echo "$daysLeft Days left to Christmas!";
?>