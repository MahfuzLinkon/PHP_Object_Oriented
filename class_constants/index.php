<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\PaymentGateway\Paddle\Transaction;
use App\Classes\Enums\Status;

$transaction = new Transaction();

//$transaction->setStatus('ffd');
$transaction->setStatus(Status::PAID);

var_dump($transaction);