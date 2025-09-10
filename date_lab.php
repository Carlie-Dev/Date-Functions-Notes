<?php
    echo(date_default_timezone_get());

    function showNow(){
        $unixTime = time();
        echo($unixTime . "\n");

        $todaysDate = date('m-d-Y h:i', $unixTime);
        echo($todaysDate . "\n");
    }

    function showStringDate($str){
        $futureTimeStamp = strtotime($str);
        $formatedFutureTime = date('m-d-Y h:i', $futureTimeStamp);
        echo ($futureTimeStamp . "\n");
        echo ($formatedFutureTime . "\n");
    }
    function showFourthOfJuly(){
        $fourth = mktime(0,0,0,7,4,2026);
        $fourthFormatted = date('m-d-Y',$fourth);
        echo($fourthFormatted . "\n");
    }

    showNow();
    showStringDate("next friday");
    showStringDate("2025-09-11");
    showFourthOfJuly();
?>