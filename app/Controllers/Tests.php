<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;

use App\Models\TestModel;

class Tests extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index($id)
    {

        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $category = new CategoryModel();
        $data['cate'] = $category->findAll();

        $test = new TestModel();
        $data['test'] = $test->get_by_cat($id);

        $data['id'] = $id;
        return view('admin/test', $data);
    }

    public function add_test($id)
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['cate2'] = $cate->get_by_id($id);
        return view('admin/add_test', $data);
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
