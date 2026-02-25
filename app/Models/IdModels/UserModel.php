<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class UserModel extends BaseIdModel
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $protectFields = true;
    protected $allowedFields = ['name', 'email', 'password', 'role'];

    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email|is_unique[users.email,user_id,{user_id}]',
        'password' => 'required|min_length[6]',
        'role' => 'required|in_list[admin,customer]',
    ];
}