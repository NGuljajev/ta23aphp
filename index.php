<?php

$num = 15;
if($num > 10){
    var_dump("Number is greater than 10");  
} else if ($num > 10){

} else {

}

$day = date('w', strtotime('2023-06-15'));
var_dump($day);
switch($day){
    case 0:
        var_dump("It's Sunday");
        break;
    case 1:
        var_dump("It's Monday");
        break;
    case 2:
        var_dump("It's Tuesday");
        break;
    case 3:
        var_dump("It's Wednesday");
        break;
    case 4:
        var_dump("It's Thursday");
        break;
    case 5:
        var_dump("It's Friday");
        break;
    case 6:
        var_dump("It's Saturday");
        break;
    default:
        var_dump("Invalid day");
}