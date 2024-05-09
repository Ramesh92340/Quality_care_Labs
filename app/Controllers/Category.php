<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\ServiceModel;
use App\Models\TestModel;

class Category extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->service = new ServiceModel();
    }

    public function index()
    {

        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $category = new CategoryModel();
        $data['cate'] = $category->findAll();
        $data['category'] = $category->get_date_package();
        $data['service'] = $this->service->findAll();
        return view('admin/category', $data);
    }

    public function add_category()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();

        return view('admin/add_category', $data);
    }

    public function insert()
    {
        $category = new CategoryModel();

        $data = [
            'name' => $this->request->getPost('cat_name'),
            'package' => $this->request->getPost('package')
        ];

        $data2 = $category->insert($data);
        if ($data2 == true) {
            return redirect()->to('category')->with('success', "Category added Successfully");
        } else {
            return redirect()->to('category')->with('blog-error', "Category added failed");
        }
    }


    public function edit($id)
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $category = new CategoryModel();
        $data['cate'] = $category->findAll();
        $data['cate2'] = $category->get_by_id_2($id);
        $data['service'] = $this->service->findAll();

        return view('admin/edit_category', $data);
    }

    public function update()
    {
        $category = new CategoryModel();
        $id = $this->request->getPost('id');

        $data = [
            'name' => $this->request->getPost('cat_name'),
            'package' => $this->request->getPost('package')
        ];

        // print_r($id);

        $data2 = $category->update($id, $data);
        if ($data2 == true) {
            return redirect()->to('category')->with('success', "Category Updated Successfully");
        } else {
            return redirect()->to('category')->with('blog-error', "Category Updated failed");
        }
    }

    public function delete($id)
    {
        $category = new CategoryModel();
        $data2 = $category->where('id', $id)->delete();

        $test = new TestModel();
        $data3 = $test->where('category_id', $id)->delete();
        if ($data2 && $data3 == true) {
            return redirect()->to('category')->with('success', "Category Deleted Successfully");
        } else {
            return redirect()->to('category')->with('blog-error', "Category Deleted failed");
        }
    }
}
