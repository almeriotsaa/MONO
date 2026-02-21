<?php

namespace App\Models\IdModels;

use App\Models\IdModels\BaseIdModel;

class ProductModel extends BaseIdModel
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $useAutoIncrement = false;
    protected $tableCode = 2;

    protected $allowedFields = [
        'product_id',
        'category_id',
        'image',
        'name_product',
        'description',
        'price',
        'stock'
    ];

    protected $startNumber = 2000;
}