<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table = 'department';
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

    // public function get_date_package()
    // {
    //     // Alias for the 'category' table
    //     $this->from('category as c');

    //     // Join the 'packages' table using the alias and specify an alias for it as well
    //     $this->join('packages as p', 'c.package = p.id');

    //     // Select distinct columns to avoid duplicate rows
    //     $this->distinct();

    //     // Select the desired columns using the aliases
    //     $this->select('c.*, p.package_name');

    //     // Execute the query and return the result set
    //     return $this->findAll();
    // }

    

    // public function get_by_id($id)
    // {
    //     $this->where('id',$id);
    //     return $this->first();
    // }

    
    
}
