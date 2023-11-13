<?php

//spl_autoload_register(function ($class){
//    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)). '.php';
//    require $path;
//});
require __DIR__ . '/../vendor/autoload.php';

$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();

var_dump(new App\PaymentGateway\Paddle\Transaction());



