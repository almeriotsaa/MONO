<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentDetailsSeeder extends Seeder
{
    public function run()
    {
        $payment = $this->db->table('payments')->get()->getRow();

        $data = [
            'detail_id' => 3001,
            'payment_id'     => $payment->payment_id,
            'provider'       => 'BCA',
            'account_number' => '1234567890',
            'status_message' => 'Payment Successful'
        ];

        $this->db->table('payment_details')->insert($data);
    }
}
