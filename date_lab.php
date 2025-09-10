<?php
    echo(date_default_timezone_get());

    function showNow(){
        $unixTime = time();
        echo($unixTime . "\n");
        $todaysDate = date('m-d-Y h:i', $unixTime);
        echo($todaysDate . "\n");
        return $unixTime;
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
    
    function addOneYearRelative(){
        $todaysDate = time();
        $oneYearLater = strtotime("+year",$todaysDate);
        echo(date('m-d-Y h:i',$oneYearLater) . "\n");
    };

    function showCentralTime(){
        $currentTimeZone = date_default_timezone_get();
        $currentDate = showNow();
        $todaysDate = date('m-d-Y h:i', $currentDate);
        echo ($todaysDate . " In Unix Time \n");
        date_default_timezone_set("America/Chicago");
        echo (date('m-d-Y h:i', $currentDate) . " In Central Time\n");
    }

    showNow();
    showStringDate("next friday");
    showStringDate("2025-09-11");
    showFourthOfJuly();
    addOneYearRelative();
    showCentralTime();
?>