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
        $this->from('category');
        $this->join('packages', 'category.package = packages.id');
        $this->select('category.*, packages.package_name');
        return $this->findAll();
    }
}
