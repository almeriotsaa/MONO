<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    public function run()
    {
        $order = $this->db->table('orders')->get()->getRow();

        $data = [
            'payment_id'=> 4001,
            'order_id' => $order->order_id,
            'method'   => 'Transfer Bank',
            'amount'   => '1500000',
            'status'   => 'Waiting Confirmation'
        ];

        $this->db->table('payments')->insert($data);
    }
}
