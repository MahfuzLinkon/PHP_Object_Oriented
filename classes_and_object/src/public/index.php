<?php

//declare(strict_types=1);
//require_once '../Transaction.php';

///////////////////////// Method Chaining ////////////////////////////
//$transaction1 =( new Transaction(100, 'Transaction 1'))
//    ->addTex(8)
//    ->applyDiscount(10);
//
//$transaction2 =( new Transaction(200, 'Transaction 2'))
//    ->addTex(8)
//    ->applyDiscount(15)->getAmount();
//
////exit();
//var_dump($transaction2);


//$transaction = new Transaction(100, 'Transaction 1');
//$transaction->addTex(8);
//$transaction->applyDiscount(10);
//var_dump($transaction->getAmount());

/////////////////////////////////// PHP STD Class ///////////////////////////////////////
$str = '{"a":1,"b":2,"c":3,"d":4}';

//$ar = json_decode($str, true);
//var_dump($ar['a']);

// STD Class
$ar = json_decode($str);
var_dump($ar->a);