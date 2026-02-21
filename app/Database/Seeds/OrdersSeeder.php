<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $user = $this->db->table('users')->get()->getRow();

        $data = [
            'order_id' => 6001,
            'user_id' => $user->user_id,
            'address' => 'Bekasi, Indonesia',
            'shipping'=> 'JNE',
            'total'   => '1500000',
            'status'  => 'Pending'
        ];

        $this->db->table('orders')->insert($data);
    }
}
