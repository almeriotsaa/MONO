<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
   public function run()
    {
        // ambil category pertama
        $category = $this->db->table('categories')->get()->getRow();

        $data = [
            'category_id' => $category->category_id,
            'image'       => 'nike.jpg',
            'name_product'=> 'Nike Air Max',
            'description' => 'Comfortable running shoes',
            'price'       => 1500000.00,
            'stock'       => 10,
            'size'        => '42'
        ];

        $this->db->table('products')->insert($data);
    }
}
