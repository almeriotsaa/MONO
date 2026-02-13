<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentDetailsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'payment_id'     => 1,
            'provider'       => 'BCA',
            'account_number' => '1234567890',
            'status_message' => 'Payment Successful'
        ];

        $this->db->table('payment_details')->insert($data);
    }
}
