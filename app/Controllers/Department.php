<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\DepartmentModel;
use App\Models\ServiceModel;

class Department extends BaseController
{
    public function __construct()
    {
        helper('form');
       $this->department = new DepartmentModel();
       $this->pack = new PackageModel();
       $this->category = new CategoryModel();
       $this->service = new ServiceModel();
    }


    public function index()
    {
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['dept'] = $this->department->findAll();
        $data['service'] = $this->service->findAll();

    return view('admin/department', $data);
    }

    public function add()
    {
       
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['service'] = $this->service->findAll();
        
        return view('admin/add_department', $data);
    }

    public function insert()
    {

        $data = [
            'name' => $this->request->getPost('dept_name'),
        ];

        $data2 = $this->department->insert($data);
        if ($data2 == true) {
            return redirect()->to('department')->with('success', "Category added Successfully");
        } else {
            return redirect()->to('department')->with('blog-error', "Category added failed");
        }
    }


    public function edit($id)
    {
      
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['dept'] = $this->department->get_by_id($id);
        $data['service'] = $this->service->findAll();


        return view('admin/edit_department', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');

        $data = [
            'name' => $this->request->getPost('cat_name'),
        ];

        // print_r($id);

        $data2 = $this->department->update($id, $data);
        if ($data2 == true) {
            return redirect()->to('department')->with('success', "Department Updated Successfully");
        } else {
            return redirect()->to('department')->with('blog-error', "Department Updated failed");
        }
    }

    public function delete($id)
    {
       
        $data2 = $this->department->where('id', $id)->delete();
        if ($data2 == true) {
            return redirect()->to('department')->with('success', "Department Deleted Successfully");
        } else {
            return redirect()->to('department')->with('blog-error', "Department Deleted failed");
        }
    }
}
