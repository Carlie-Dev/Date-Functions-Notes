<?php 
date_default_timezone_set('America/Chicago');

function todaysDate(){
    $timeStamp = time();
    echo($timeStamp . "\n");

    $todaysDate = date('m-d-Y h:i', $timeStamp);

    echo($todaysDate . "\n");
}

todaysDate()
?>