<?php
    echo(date_default_timezone_get());

    //This function gets the current unix time and displays it
    function showNow(){
        $unixTime = time();
        echo($unixTime . "\n");
        $todaysDate = date('m-d-Y h:i', $unixTime);
        echo($todaysDate . "\n");
        return $unixTime;
    }

    //this function is being used to convert strings into dates and displaying them
    function showStringDate($str){
        $futureTimeStamp = strtotime($str);
        $formatedFutureTime = date('m-d-Y h:i', $futureTimeStamp);
        echo ($futureTimeStamp . "\n");
        echo ($formatedFutureTime . "\n");
    }

    //this gets the fourth of july using mktime to get the seed
    function showFourthOfJuly(){
        $fourth = mktime(0,0,0,7,4,2026);
        $fourthFormatted = date('m-d-Y',$fourth);
        echo($fourthFormatted . "\n");
    }
    
    //this function is using the strtotime function to add one year to todays date
    function addOneYearRelative(){
        $todaysDate = time();
        $oneYearLater = strtotime("+year",$todaysDate);
        echo(date('m-d-Y h:i',$oneYearLater) . "\n");
    };

    //this function is showing the default time zone then displaying todays date in Central time
    function showCentralTime(){
        $currentTimeZone = date_default_timezone_get();
        $currentDate = showNow();
        $todaysDate = date('m-d-Y h:i', $currentDate);
        echo ($todaysDate . " In Unix Time \n");
        date_default_timezone_set("America/Chicago");
        echo (date('m-d-Y h:i', $currentDate) . " In Central Time\n");
    }

    //functions being called
    showNow();
    showStringDate("next friday");
    showStringDate("2025-09-11");
    showFourthOfJuly();
    addOneYearRelative();
    showCentralTime();
?>