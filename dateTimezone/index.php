<?php
//$curTime = time();
//echo $curTime + 6 *60 * 60 . '<br>';
////date_default_timezone_set('GMT');
//echo date('m/d/Y g:ia', $curTime);
//echo date_default_timezone_get();


// String to date conversion
$time = '2023-10-12 07:00:00';
echo date('d-m-Y g:ia', strtotime($time));