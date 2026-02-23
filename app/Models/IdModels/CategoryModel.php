<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class CategoryModel extends BaseIdModel
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'category_id',
        'category_gender',
        'category_type'
    ];

    protected $startNumber = 7000;
}