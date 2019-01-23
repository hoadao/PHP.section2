<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 22/01/2019
 * Time: 17:22
 */
function read($num)
{
    $res="chua co gi";
    if($num == 0){
        $res = "";

    }
    else if( $num == 1){
        $res = "one";
    }
    else if($num == 2){
        $res = "two";
    }
    else if($num == 3){
        $res = "three";
    }
    else if($num == 4){
        $res = "four";
    }
    else if($num ==5){
        $res = "five";
    }
    else if($num ==6){
        $res = "six";
    }
    else if($num == 7){
        $res = "seven";
    }
    else if($num == 8){
        $res = "eight";
    }
    else if($num ==9){
        $res = "nine";
    }
    return $res;
}
 echo read(1);