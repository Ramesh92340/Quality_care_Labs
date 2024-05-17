<?php

namespace App\Models;

use CodeIgniter\Model;

class HealthModel extends Model
{
    protected $table = 'healthrisks';  // The table name
    protected $primaryKey = 'id';  // The primary key of the table
    protected $allowedFields = [
        'name',
        'image'
    ];  


    // Method to insert data
    public function insert_data($data)
    {
        return $this->save($data);
    }

    // Method to get an item by ID
    public function get_by_id($id)
    {
        return $this->where('id', $id)
                    ->first();
    }

    // Method to insert a new item
    public function insertItem($data)
    {
        return $this->insert($data);
    }

   
    public function getItems()
    {
        return $this->findAll();
    }

    // Method to retrieve a single item by ID
    public function getItemById($id)
    {
        return $this->find($id);
    }
}
