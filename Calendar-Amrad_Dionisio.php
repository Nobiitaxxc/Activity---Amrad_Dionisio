<?php

$today = date ('D');
$fulldate = date ('y-m-d');
$currentDate = date('d F Y');

switch ($today){
    case 'Mon':
        $day = "Monday";
        break;
    case 'Tues':
        $day = "Tues";
        break;
    case 'Wed':
        $day = "Wednesday";
        break;
    case 'Thurs':
        $day = "Thursday";
        break;
    case 'Fri':
        $day = "Friday";
        break;
    case 'Saturday';
        $day = "Saturday";
        break;
    case 'Sunday';
        $day = "Sunday";
        break;
}

echo "Date to day: $today ";
echo "$currentDate";

?>