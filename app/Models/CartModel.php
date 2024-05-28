<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'services',
        'servicesqty',
        'packages',
        'packagesqty',
        'minipackages',
        'minipackagesqty',
        'healthrisk',
        'healthriskqty',
        'user',
        'status'
    ];

    public function checkIfExists($userId, $type, $typeid)
    {
        $this->from('cart as crt');
        if ($type == 1) {
            $this->where('crt.services', $typeid);
        } else if ($type == 2) {
            $this->where('crt.healthrisk', $typeid);
        } else if ($type == 3) {
            $this->where('crt.packages', $typeid);
        }
        $this->where('crt.status', 1);
        $this->where('crt.user', $userId);
        return $this->first();
    }

    public function getServicesCart($id)
    {
        $this->from('cart as crt');
        $this->join('service-tests as st', 'crt.services = st.id');
        $this->select('crt.*, st.id as stid, st.*, crt.id as cartid');
        $this->where('crt.status', 1);
        $this->where('crt.user', $id);
        $this->distinct();
        return $this->findAll();
    }

    public function getHealthRiskCart($id)
    {
        $this->from('cart as crt');
        $this->join('healthrisk_packs as hrp', 'crt.healthrisk = hrp.id');
        $this->select('crt.*, hrp.id as hrpid, hrp.*, crt.id as cartid');
        $this->where('crt.status', 1);
        $this->where('crt.user', $id);
        $this->distinct();
        return $this->findAll();
    }

    public function getPackagesCart($id)
    {
        $this->from('cart as crt');
        $this->join('packages as pkgs', 'crt.packages = pkgs.id');
        $this->select('crt.*, pkgs.id as pkgsid, pkgs.*,  (SELECT COUNT(*) FROM tests WHERE tests.package_id = pkgs.id) as test_count, crt.id as cartid');
        $this->where('crt.status', 1);
        $this->where('crt.user', $id);
        $this->distinct();
        return $this->findAll();
    }
}