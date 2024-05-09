<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\DepartmentModel;
use App\Models\ServiceModel;
use App\Models\ServicetestModel;
use App\Models\TestModel;

class Servicetest extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->pack = new PackageModel();
        $this->category = new CategoryModel();
        $this->sertest = new ServicetestModel();
        $this->service = new ServiceModel();
        $this->department = new DepartmentModel();
    }

    public function index($id)
    {

       
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['service'] = $this->service->findAll();

        $data['id'] = $id;
        $data['sertest'] = $this->sertest->find_by_serv($id);
        return view('admin/servicetest', $data);
    }

    public function add($id)
    {
        $data['id'] = $id;
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['service'] = $this->service->findAll();
        $data['dept'] = $this->department->findAll();
        return view('admin/add_servicetest', $data);
    }

    public function insert()
    {
    
        $id = $this->request->getPost('ser_id');

        $data = [
            'test_code' => $this->request->getPost('test_code'),
            'test_name' => $this->request->getPost('test_name'),
            'department' => $this->request->getPost('dep_id'),
            'price' => $this->request->getPost('test_price'),
            'service' => $id
        ];

        // print_r($data);

        $data2 = $this->sertest->insert($data);
        if ($data2 == true) {
            return redirect()->to('test-service/' . $id)->with('success', "Test added Successfully");
        } else {
            return redirect()->to('test-service/' . $id)->with('blog-error', "Test added failed");
        }
    }

    public function edit($id)
    {

        
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['service'] = $this->service->findAll();
        $data['dept'] = $this->department->findAll();
        $data['sertest'] = $this->sertest->get_by_id2($id);
        return view('admin/edit_sertest', $data);
    }

    public function update()
    {
        $sertest = new ServicetestModel();
        $id = $this->request->getPost('id');
        $service_id = $this->request->getPost('service_id');
     
    
        $data = [
            'test_code' => $this->request->getPost('test_code'),
            'test_name' => $this->request->getPost('test_name'),
            'department' => $this->request->getPost('dep_id'), 
            'price' => $this->request->getPost('test_price')
        ];
    

        // print_r($id);
     
        $data2 = $sertest->update($id,$data);
        if ($data2) {
            return redirect()->to('test-service/' . $service_id)->with('success', "Test Updated Successfully");
        } else {
            return redirect()->to('test-service/' . $service_id)->with('blog-error', "Test Updated failed");
        }
    }
    

    public function delete($id, $service_id)
    {

       
        $data2 = $this->sertest->where('id', $id)->delete();
        if ($data2 == true) {
            return redirect()->to('test-service/' . $service_id)->with('success', "Test Deleted Successfully");
        } else {
            return redirect()->to('test-service/' . $service_id)->with('blog-error', "Test Deleted failed");
        } 
    }
}
