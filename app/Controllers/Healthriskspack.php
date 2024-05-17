<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\HealthdescModel;
use App\Models\HealthModel;
use App\Models\HealthriskpacksModel;
use App\Models\ServiceModel;
use App\Models\TestModel;

class Healthriskspack extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->service = new ServiceModel();
        $this->healthcate = new HealthModel();
        $this->healthdesc = new HealthdescModel();
        $this->healthpack = new HealthriskpacksModel();
    }

    public function index($id)
    {
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        $data['helath_id'] = $id;
        $data['healthpack'] = $this->healthpack->find_by_healthid($id);
        return view('admin/health_pack', $data);
    }

    public function add($id)
    {
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        $data['health_id'] = $id;
        return view('admin/add_healthpack', $data);
    }

    public function insert()
    {
        $healthid = $this->request->getPost('health_id');
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'parameters' => $this->request->getPost('parameters'),
            'health_id' => $this->request->getPost('health_id'),
            'about' => $this->request->getPost('about')
        ];

        $data2 = $this->healthpack->insert($data);
        if ($data2 == true) {
            return redirect()->to('health-packages/' . $healthid)->with('success', "Healthrisk packs added Successfully");
        } else {
            return redirect()->to('health-packages/' . $healthid)->with('blog-error', "Healthrisk packs added failed");
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
        $data['healthpack'] = $this->healthpack->find_by_id($id);
        return view('admin/edit_healthpack', $data);
    }

    public function update()
    {

        $id = $this->request->getPost('id');
        $healthid = $this->request->getPost('health_id');


        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'parameters' => $this->request->getPost('parameters'),
            'about' => $this->request->getPost('about')
        ];

        // print_r($id);

        $data2 = $this->healthpack->update($id, $data);
        if ($data2 == true) {
            return redirect()->to('health-packages/' . $healthid)->with('success', "Healthrisk packs Updated Successfully");
        } else {
            return redirect()->to('health-packages/' . $healthid)->with('blog-error', "Healthrisk packs Updated failed");
        }
    }

    public function delete($id, $healthid)
    {

        $data2 = $this->healthpack->where('id', $id)->delete();
        if ($data2 == true) {
            return redirect()->to('health-packages/' . $healthid)->with('success', "Healthrisk Packs Deleted Successfully");
        } else {
            return redirect()->to('health-packages/' . $healthid)->with('blog-error', "Healthrisk Packs Deleted failed");
        }
    }
}
