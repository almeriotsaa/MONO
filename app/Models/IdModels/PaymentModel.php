<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class PaymentModel extends BaseIdModel
{
    protected $table = 'payments';
    protected $primaryKey = 'payment_id';
    protected $allowedFields = [
        'payment_id',
        'order_id',
        'payment_date',
        'amount',
        'status'
    ];

    protected $startNumber = 4000;
}