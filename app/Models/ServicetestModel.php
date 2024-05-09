<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicetestModel extends Model
{
    protected $table = 'service-tests';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'test_code',
        'test_name',
        'department',
        'price',
        'service'
    ];



    public function insert_data($data)
    {
        return $this->save($data);
    }

    public function get_by_id($id)
    {
        $this->where('id', $id);
        return $this->first();
    }
    
}
