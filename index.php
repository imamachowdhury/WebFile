<?php

$year = 1900 ;




if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is leap year!!";
}elseif ($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not leap year!!";
}else if ($year % 4 == 0){
    echo "{$year} is leap year!!";
}else{
    echo "{$year} is not a leap year";
}

echo "\n";

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "$year is a leap year";
}else{
    echo "$year is not a leap year";
}


echo "\n";

$leapYear = ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? "$year is leap year" : "$year is not leap year"; 
echo $leapYear;
