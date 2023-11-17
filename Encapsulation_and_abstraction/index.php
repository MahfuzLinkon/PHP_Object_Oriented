<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\PaymentGateway\Paddle\Transaction;
use App\Classes\Enums\Status;

$transaction = new Transaction(25);
//$transaction->amount = 125;
//$transaction->process();

$transaction->copyFrom(new Transaction(100));

