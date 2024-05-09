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
        return view('admin/servicetest', $data);
    }

    public function add($id)
    {
        $data['id'] = $id;
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['service'] = $this->service->findAll();
        $data['service'] = $this->service->findAll();
        $data['dept'] = $this->department->findAll();
        return view('admin/add_servicetest', $data);
    }

    public function insert()
    {
        $test = new TestModel();
        $category_id = $this->request->getPost('cat_id');

        $data = [
            'test_name' => $this->request->getPost('test_name'),
            'package_id' => $this->request->getPost('pack_id'),
            'category_id' => $category_id
        ];

        $data2 = $test->insert($data);
        if ($data2 == true) {
            return redirect()->to('test/' . $category_id)->with('success', "Test added Successfully");
        } else {
            return redirect()->to('test/' . $category_id)->with('blog-error', "Test added failed");
        }
    }

    public function edit($id)
    {

        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $test = new TestModel();
        $data['test'] = $test->get_by_id($id);
        $data['service'] = $this->service->findAll();

        return view('admin/edit_test', $data);
    }

    public function update()
    {
        $test = new  TestModel();

        $id = $this->request->getPost('id');
        $category_id = $this->request->getPost('cat_id');


        $data = [
            'test_name' => $this->request->getPost('test_name'),
        ];

        $data2 = $test->update($id, $data);
        if ($data2 == true) {
            return redirect()->to('test/' . $category_id)->with('success', "Test Updated Successfully");
        } else {
            return redirect()->to('test/' . $category_id)->with('blog-error', "Test Updated failed");
        }
    }

    public function delete($id, $category_id)
    {

        $test = new  TestModel();
        $data2 = $test->where('id', $id)->delete();
        if ($data2 == true) {
            return redirect()->to('test/' . $category_id)->with('success', "Test Deleted Successfully");
        } else {
            return redirect()->to('test/' . $category_id)->with('blog-error', "Test Deleted failed");
        } 
    }
}
