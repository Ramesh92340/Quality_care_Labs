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

    public function get_date_package()
    {
     
        $this->from('category as c');

        $this->join('packages as p', 'c.package = p.id');

        $this->distinct();

        $this->select('c.*, p.package_name');

    
        return $this->findAll();
    }

    public function get_by_id($id)
    {
        $this->where('id', $id);
        return $this->findAll();
    }

    public function get_by_id_2($id)
    {
        $this->where('id', $id);
        return $this->first();
    }
}
