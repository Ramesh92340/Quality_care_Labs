<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\HealthModel;
use App\Models\ServiceModel;
use App\Models\TestModel;

class Health extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->service = new ServiceModel();
        $this->healthcate = new HealthModel();
    }

    public function index()
    {

        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();

        return view('admin/health', $data);
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
        $file = $this->request->getFile('image');

        // Check if an image file was uploaded
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Generate a random name for the uploaded file
            $newName = $file->getRandomName();

            // Move the file to the desired path
            $file->move('uploads/', $newName);

            // Get other form data
            $name = $this->request->getPost('name');

            // Prepare data to insert into the database
            $data = [
                'name' => $name,
                'image' => $newName
            ];

            // Insert data into the database
            $result = $this->healthcate->insert($data);

            // Check if the insertion was successful
            if ($result === true) {
                // Redirect with success message
                return redirect()->to('health')->with('success', "Category added successfully");
            } else {
                // Redirect with error message
                return redirect()->to('health')->with('blog-error', "Category addition failed");
            }
        } else {
            // Handle invalid file upload
            return redirect()->to('health')->with('blog-error', "Invalid image file uploaded");
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
            return redirect()->to('health')->with('success', "Category Updated Successfully");
        } else {
            return redirect()->to('health')->with('blog-error', "Category Updated failed");
        }
    }

    public function delete($id)
    {
        $category = new CategoryModel();
        $data2 = $category->where('id', $id)->delete();

        $test = new TestModel();
        $data3 = $test->where('category_id', $id)->delete();
        if ($data2 && $data3 == true) {
            return redirect()->to('health')->with('success', "Category Deleted Successfully");
        } else {
            return redirect()->to('health')->with('blog-error', "Category Deleted failed");
        }
    }
    public function add_health()
    {
        // Your logic for the add_health page
        return view('admin/add_health'); // Adjust the path to the view file
    }
}
