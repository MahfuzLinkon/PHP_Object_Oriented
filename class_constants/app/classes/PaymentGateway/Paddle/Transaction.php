<?php

declare(strict_types = 1);

namespace App\Classes\PaymentGateway\Paddle;

use App\Classes\Enums\Status;

class Transaction
{
    private string $status;

    public function __construct()
    {
        self::setStatus(Status::PENDING) ;
    }

    public function setStatus($status) : self
    {
        if (! isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid Status');
        }
        $this->status = $status;
        return $this;
    }
}