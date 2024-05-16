<?php namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'healthrisks';  // The table name
    protected $primaryKey = 'id';  // The primary key of the table
    protected $allowedFields = ['name' ];  // Fields that can be inserted/updated


  



    public function insert_data($data)
    {
        return $this->save($data);
    }

    public function get_by_id($id)
    {
        $this->where('id', $id);
        return $this->first();
    }
    



    // Method to insert a new item
    public function insertItem($data)
    {
        return $this->insert($data);
    }

    // Method to retrieve all items
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
