<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'name',
        'package',
    ];
    


    public function insert_data($data)
    {
        return $this->save($data);
    }
}
