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

    public function get_with_cate()
    {
        $this->from('packages as p');
        $this->join('category as c', 'p.id = c.package');
        $this->select('p.* , c.name, c.id');
        return $this->findAll();
    }

    public function get_by_id($id)
    {
        $this->where('id',$id);
        return $this->first();
    }

    public function update_date($id, $data)
    {
        // print_r($id);

        return $this->where('id', $id)->set($data)->update();
    }
}
