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
        $this->category = new CategoryModel();
    }

    public function index()
    {

        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $data['service'] = $this->service->findAll();

        $data['health'] = $this->healthcate->getItems();
        return view('admin/health', $data);
    }

    public function add_health()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        return view('admin/add_health', $data); // Adjust the path to the view file
    }

    public function insert()
    {
        $file = $this->request->getFile('image');


        if ($file && $file->isValid() && !$file->hasMoved()) {

            $newName = $file->getRandomName();


            $file->move('uploads/', $newName);

            $name = $this->request->getPost('name');

            $data = [
                'name' => $name,
                'image' => $newName
            ];

            if ($this->healthcate->insert($data)) {
                return redirect()->to('health')->with('success', "Health added successfully");
            } else {
                $errors = $this->healthcate->errors();
                log_message('error', 'Database insert failed: ' . json_encode($errors));
                return redirect()->to('health')->with('blog-error', "Health addition failed");
            }
        } else {
            log_message('error', 'Invalid file upload: ' . ($file ? $file->getErrorString() : 'No file uploaded'));
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

        return view('admin/edit_healthcategory', $data);
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
        
        // Fetch staff data
        $healthata = $this->healthcate->find($id);

        if ($healthata && array_key_exists('image', $healthata)) {
            // Get the path from the staff data
            $path = "uploads/" . $healthata['image'];

            // Check if the file exists and is a file
            if (file_exists($path) && is_file($path)) {
                // Unlink the file
                unlink($path);
            } else {
                // Handle the case where the path points to a directory or doesn't exist
                echo "File not found or is a directory: " . $path;
            }
        }
        // Delete the staff record with a where clause
       $health = $this->healthcate->where('id', $id)->delete();
        if ($health == true) {
            return redirect()->to('health')->with('success', "Health Category Deleted successfully");
        } else {
            return redirect()->to('health')->with('blog-error', "Health Category Deleted Failed");
        }
    }
}
