<?php 
date_default_timezone_set('America/Chicago');

function todaysDate(){
    $timeStamp = time();
    echo($timeStamp . "\n");

    $todaysDate = date('m-d-Y h:i', $timeStamp);

    echo($todaysDate . "\n");
}

function calculateFutureDate($daysToAdd = 0){
    $timeStamp = time();
    $futureTimeStamp = strtotime("+$daysToAdd days", $timeStamp);
    $futureDate = date("Y-m-d : D", $futureTimeStamp);
    echo($daysToAdd . " days from now is " . $futureDate . "\n");
}   

todaysDate();

calculateFutureDate(5);
?>