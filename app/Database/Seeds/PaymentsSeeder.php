<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'order_id' => 1,
            'method'   => 'Transfer Bank',
            'amount'   => '1500000',
            'status'   => 'Waiting Confirmation'
        ];

        $this->db->table('payments')->insert($data);
    }
}
