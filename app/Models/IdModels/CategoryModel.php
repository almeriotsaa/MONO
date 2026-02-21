<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class CategoryModel extends BaseIdModel
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'category_id',
        'name_category'
    ];

    protected $startNumber = 7000;
}