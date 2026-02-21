<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class PaymentDetailModel extends BaseIdModel
{
    protected $table = 'payment_details';
    protected $primaryKey = 'payment_detail_id';
    protected $allowedFields = [
        'payment_detail_id',
        'payment_id',
        'method',
        'account_number',
        'provider'
    ];

    protected $startNumber = 3000;
}