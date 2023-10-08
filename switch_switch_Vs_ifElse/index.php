<?php
//$status = 'due';
//
//switch ($status){
//    case 'paid':
//        echo 'Paid';
//        break;
//    case 'due':
//        echo 'Due';
//        break;
//    case 'painding':
//        echo 'Painding';
//        break;
//    default:
//        echo 'Unknown';
//}

// If-else vs switch case
function x(){
    sleep(3);
    echo 'Done';
    return 3;
}
// This will check statement for each execution
// for 3 it takes 9 sec to run

//if(x() === 1){
//    echo 1;
//}elseif(x() === 2){
//    echo 2;
//}elseif(x() === 3){
//    echo 3;
//}else{
//    echo 4;
//}

// This problem can be solved used a variable
// Now it takes only 3 seconds
$x = x();
if($x  === 1){
    echo 1;
}elseif($x  === 2){
    echo 2;
}elseif($x  === 3){
    echo 3;
}else{
    echo 4;
}

// switch case only check statement once
// for 3 it takes 3 sec to run
//switch (x()){
//    case 1:
//        echo 1;
//        break;
//    case 2:
//        echo 2;
//        break;
//    case 3:
//        echo 3;
//        break;
//    default:
//        echo 4;
//}