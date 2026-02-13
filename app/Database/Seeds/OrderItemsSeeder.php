<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    public function run()
    {
        $order = $this->db->table('orders')->get()->getRow();
        $product = $this->db->table('products')->get()->getRow();

        $data = [
            'order_id'   => $order->order_id,
            'product_id' => $product->product_id,
            'quantity'   => 1,
            'size'       => '42'
        ];

        $this->db->table('order_items')->insert($data);
    }
}
