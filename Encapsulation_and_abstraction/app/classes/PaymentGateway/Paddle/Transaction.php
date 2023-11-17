<?php

declare(strict_types = 1);

namespace App\Classes\PaymentGateway\Paddle;

use App\Classes\Enums\Status;

class Transaction
{
    public $amount = 0;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function copyFrom(Transaction $transaction)
    {
        var_dump( $transaction->amount, $transaction->sendEmail());

    }

    public function sendEmail()
    {
        return true;
    }
    public function process (){
        echo 'Processing $'. $this->amount. ' transaction';
    }
}