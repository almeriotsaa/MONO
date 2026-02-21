<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'user_id' => 1001,
            'name'     => 'Michael',
            'email'    => 'michael@gmail.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'role'     => 'customer'
        ];

        $this->db->table('users')->insert($data);
    }
}
