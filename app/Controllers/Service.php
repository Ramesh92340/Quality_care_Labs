<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\DepartmentModel;
use App\Models\ServiceModel;

class Service extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->service = new ServiceModel();
        $this->pack = new PackageModel();
        $this->category = new CategoryModel();
    }


    public function index()
    {
        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['service'] = $this->service->findAll();

        return view('admin/service', $data);
    }

    public function add()
    {

        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();

        return view('admin/add_service', $data);
    }

    public function insert()
    {

        $data = [
            'name' => $this->request->getPost('ser_name'),
        ];

        $data2 = $this->service->insert($data);
        if ($data2 == true) {
            return redirect()->to('servicess')->with('success', "Service added Successfully");
        } else {
            return redirect()->to('servicess')->with('blog-error', "Service added failed");
        }
    }


    public function edit($id)
    {

        $data['pack'] = $this->pack->findAll();
        $data['cate'] = $this->category->findAll();
        $data['service2'] = $this->service->get_by_id($id);
        $data['service'] = $this->service->findAll();


        return view('admin/edit_service', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');

        $data = [
            'name' => $this->request->getPost('ser_name'),
        ];

        // print_r($id);

        $data2 = $this->service->update($id, $data);
        if ($data2 == true) {
            return redirect()->to('servicess')->with('success', "Service Updated Successfully");
        } else {
            return redirect()->to('servicess')->with('blog-error', "Service Updated failed");
        }
    }

    public function delete($id)
    {

        $data2 = $this->service->where('id', $id)->delete();
        if ($data2 == true) {
            return redirect()->to('servicess')->with('success', "Service Deleted Successfully");
        } else {
            return redirect()->to('servicess')->with('blog-error', "Service Deleted failed");
        }
    }
}
