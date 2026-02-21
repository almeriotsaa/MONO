<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class OrderModel extends BaseIdModel
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $allowedFields = [
        'order_id',
        'user_id',
        'order_date',
        'total_price',
        'status'
    ];

    protected $startNumber = 6000;
}