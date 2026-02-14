<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'category_gender' => 'Men',
            'category_type'   => 'Shoes'
        ];

        $this->db->table('categories')->insert($data);
    }
}
