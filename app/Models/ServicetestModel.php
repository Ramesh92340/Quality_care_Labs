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

    public function select_test1()
    {
        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.service', 1);
        $this->distinct();
        return $this->findAll();
    }
    public function select_test2()
    {
        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.service', 2);
        $this->distinct();
        return $this->findAll();
    }
    public function select_test3()
    {
        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.service', 3);
        $this->distinct();
        return $this->findAll();
    }
    public function select_test4()
    {
        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.service', 4);
        $this->distinct();
        return $this->findAll();
    }
    public function select_test5()
    {
        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.service',5);
        $this->distinct();
        return $this->findAll();
    }
    public function select_test6()
    {
        $this->from('service-tests as st');
        $this->join('department as d', 'st.department = d.id');
        $this->select('st.*, d.name');
        $this->where('st.service', 6);
        $this->distinct();
        return $this->findAll();
    }
}
