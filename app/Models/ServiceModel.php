<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
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
