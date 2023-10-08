<?php
$status = 1;

$dis = match($status){
    1 => 'paid',
    2 => 'due',
    3,4 => 'rejected',
    default => 'unknown'
};

echo $dis;