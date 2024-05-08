<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $category = new CategoryModel();
        
        $data['cate'] = $category->get_date_package();
        return view('admin/category', $data);
    }

    public function add_category()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
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
            return redirect()->to('package' )->with('success', "Category added Successfully");
        } else {
            return redirect()->to('package' )->with('blog-error', "Category added failed");
        }

    }
    

}
