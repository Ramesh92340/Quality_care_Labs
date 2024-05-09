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

    public function find_by_serv($id)
    {

        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.service', $id);
        $this->distinct();
        return $this->findAll();
    }

    public function get_by_id2($id)
    {
        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.id', $id);
        return $this->first();
    }

    public function update_data($id, $data)
    {
        $builder = $this->db->table('service-tests'); // Replace 'service-tests' with your actual table name
        $builder->where('id', $id);
        return $builder->update($data);
    }
}
