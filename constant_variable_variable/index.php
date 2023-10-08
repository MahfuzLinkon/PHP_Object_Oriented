<?php
// constant
//define('STATUS_PAID', 'Paid');
//
//echo STATUS_PAID;

const STATUS_PAID = 'paid';
echo STATUS_PAID;
echo "<br>";
// Variable Variable
$foo = 'bar';
$$foo = 'baz';
echo $bar;
echo "<br>";
echo "$foo {$$foo}";
echo "<br>";
echo PHP_VERSION;

echo "<br>";
echo __LINE__;
echo __FILE__;