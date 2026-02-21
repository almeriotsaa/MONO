<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class OrderItemModel extends BaseIdModel
{
    protected $table = 'order_items';
    protected $primaryKey = 'order_item_id';
    protected $allowedFields = [
        'order_item_id',
        'order_id',
        'product_id',
        'quantity',
        'size'
    ];

    protected $startNumber = 5000;
}