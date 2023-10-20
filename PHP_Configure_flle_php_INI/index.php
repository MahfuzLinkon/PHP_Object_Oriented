<?php

///////////// error_reporting //////////////////////
//var_dump(ini_get('error_reporting'));
//var_dump(E_ALL);
//ini_set('error_reporting', E_ALL & ~E_WARNING);
//$ar = [1];
//echo $ar[3];

///////////// display_errors //////////////////////
//var_dump(ini_get('display_errors'));
//ini_set('display_errors',0);
//$ar = [1];
//echo $ar[3];

///////////// max_execution_time //////////////////////
//ini_set('max_execution_time',3);
//sleep(5);
//echo 'Hello';

///////////// memory_limit //////////////////////
var_dump(ini_get('memory_limit'));
$string = 'x';

for ($i = 0 ; $i < 1000; $i++){
    $string .= $string;
}
echo $string;