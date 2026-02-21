<?php

namespace App\Models;

use App\Models\IdModels\BaseIdModel;

class UserModel extends BaseIdModel
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'user_id',
        'name',
        'email',
        'password',
        'role'
    ];

    protected $startNumber = 1000;
}