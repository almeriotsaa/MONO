<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_id'     => 7001,
                'category_gender' => 'Men',
                'category_type'   => 'Tops'
            ],
            [
                'category_id'     => 7002,
                'category_gender' => 'Men',
                'category_type'   => 'Outwear'
            ],
            [
                'category_id'     => 7003,
                'category_gender' => 'Men',
                'category_type'   => 'Bottom'
            ],
            [
                'category_id'     => 7004,
                'category_gender' => 'Men',
                'category_type'   => 'Accessories'
            ],
            [
                'category_id'     => 7005,
                'category_gender' => 'Women',
                'category_type'   => 'Top'
            ],
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}
