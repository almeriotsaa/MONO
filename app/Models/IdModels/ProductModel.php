<?php

namespace App\Models\IdModels;

use App\Models\IdModels\BaseIdModel;

class ProductModel extends BaseIdModel
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $protectFields = true;
    protected $allowedFields = [
        'category_id', 'image', 'name_product', 
        'description', 'price', 'stock', 'size'
    ];

    public function getWithCategory()
    {
        return $this->select('products.*, categories.category_gender, categories.category_type')
                    ->join('categories', 'categories.category_id = products.category_id')
                    ->findAll();
    }

    public function filterByCategory($gender = null, $type = null)
    {
        $builder = $this->select('products.*, categories.category_gender, categories.category_type')
                       ->join('categories', 'categories.category_id = products.category_id');
        
        if ($gender) {
            $builder->where('categories.category_gender', $gender);
        }
        
        if ($type) {
            $builder->where('categories.category_type', $type);
        }
        
        return $builder->findAll();
    }
}