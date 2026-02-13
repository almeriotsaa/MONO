<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'user_id' => 1,
            'address' => 'Bekasi, Indonesia',
            'shipping'=> 'JNE',
            'total'   => '1500000',
            'status'  => 'Pending'
        ];

        $this->db->table('orders')->insert($data);
    }
}
