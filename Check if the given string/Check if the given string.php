<?php
$time = "25:16";
validTime($time);
function validTime($myTime){
    $time = preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9]?$#', $myTime);
    if ( $time == 1 ){
        echo "true";
    }else{
        echo "false";
    }
}