<?php 
function todaysDate(){
    $timeStamp = time();
    echo($timeStamp . "\n");

    $todaysDate = date('m-d-Y h:i');
}

todaysDate()
?>