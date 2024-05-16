<?php

namespace App\Models;

use CodeIgniter\Model;

class HealthpackModel extends Model
{
    protected $table = 'health_categories'; // Adjust table name as needed
    protected $primaryKey = 'id'; // Primary key field name
    protected $allowedFields = [
        'name',
        'image',
        'description',
        'keypoints'
    ]; // Fields that can be inserted/updated

    // Method to insert a new health category
    public function insertHealthpackModel($data)
    {
        return $this->insert($data);
    }

    // Method to retrieve all health categories
    public function getHealthCategories()
    {
        return $this->findAll();
    }

    // Method to retrieve a single health category by ID
    public function getHealthpackModelById($id)
    {
        return $this->find($id);
    }

    // Method to update a health category
    public function updateHealthpackModel($id, $data)
    {
        return $this->update($id, $data);
    }

    // Method to delete a health category
    public function deleteHealthpackModel($id)
    {
        return $this->delete($id);
    }
}
