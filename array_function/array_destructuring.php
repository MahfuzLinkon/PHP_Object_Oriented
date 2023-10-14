<?php
//$ar = [1,2,3,4];
////list($a, $b, $c, $d)= $ar;
//[$a, $b, $c, $d]= $ar;

/// Nested Array destructuring
//$ar2 = [1,2,[3,4]];
//[$a, , [$c, $d]]= $ar2;
//
////echo "$a $b $c $d" ;
//echo "$a  $c $d" ;
//////////////// Specify key /////////////////////
$ar = [1,2,3,4];
[1 => $a, 0 => $b, 3 => $c, 2 => $d] = $ar;
echo "$a $b $c $d" ;