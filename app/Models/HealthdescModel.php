<?php

namespace App\Models;

use CodeIgniter\Model;

class HealthdescModel extends Model
{
    protected $table = 'healthrisk_desc';  // The table name
    protected $primaryKey = 'id';  // The primary key of the table
    protected $allowedFields = [
        'health_id',
        'description'
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

    public function find_by_healthid($id)
    {
        $this->where('health_id', $id);
        return $this->findAll();
    }

    public function find_by_id($id)
    {
        $this->where('id', $id);
        return $this->first();
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
