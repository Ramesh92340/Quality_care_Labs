<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'package_name',
        'package_price',
    ];
    


    public function insert_data($data)
    {
        return $this->save($data);
    }
}
