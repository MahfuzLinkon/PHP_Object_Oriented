<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';

var_dump(new PaymentGateway\Paddle\Transaction());

