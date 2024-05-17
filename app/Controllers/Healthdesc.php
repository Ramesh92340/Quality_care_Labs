<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\HealthdescModel;
use App\Models\HealthModel;
use App\Models\ServiceModel;
use App\Models\TestModel;

class Healthdesc extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->service = new ServiceModel();
        $this->healthcate = new HealthModel();
        $this->healthdesc = new HealthdescModel();
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
        $data['healthdesc'] = $this->healthdesc->find_by_healthid($id);
        return view('admin/health_desc', $data);
    }

    public function add($id)
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        $data['helath_id'] = $id;
        return view('admin/add_health_desc', $data);
    }

    public function insert()
    {
        $healthid = $this->request->getPost('health_id');
        $data = [
            'description' => $this->request->getPost('description'),
            'health_id' => $healthid
        ];

        $data2 = $this->healthdesc->insert($data);
        if ($data2 == true) {
            return redirect()->to('health-desc/' . $healthid)->with('success', "Healthrisk Description added Successfully");
        } else {
            return redirect()->to('health-desc/' . $healthid)->with('blog-error', "Healthrisk Description added failed");
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
        $data['healthdesc'] = $this->healthdesc->find_by_id($id);
        return view('admin/edit_healthdesc', $data);
    }

    public function update()
    {

        $id = $this->request->getPost('id');
        $healthid = $this->request->getPost('health_id');
        $description = $this->request->getPost('description');

        $data = [
            'description' => $description,
        ];

        // print_r($id);

        $data2 = $this->healthdesc->update($id, $data);
        if ($data2 == true) {
            return redirect()->to('health-desc/' . $healthid)->with('success', "Healthrisk Description Updated Successfully");
        } else {
            return redirect()->to('health-desc/' . $healthid)->with('blog-error', "Healthrisk Description Updated failed");
        }
    }

    public function delete($id, $healthid)
    {

        $data2 = $this->healthdesc->where('id', $id)->delete();
        if ($data2 == true) {
            return redirect()->to('health-desc/' . $healthid)->with('success', "Healthrisk Description Deleted Successfully");
        } else {
            return redirect()->to('health-desc/' . $healthid)->with('blog-error', "Healthrisk Description Deleted failed");
        }
    }
}
