<?php

namespace App\Models\IdModels;

use CodeIgniter\Model;

class BaseIdModel extends Model
{
    protected $startNumber = 1000;

    public function generateCustomId()
    {
        $lastData = $this->orderBy($this->primaryKey, 'DESC')->first();

        if ($lastData) {
            return $lastData[$this->primaryKey] + 1;
        }

        return $this->startNumber + 1;
    }
}