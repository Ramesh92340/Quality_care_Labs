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
}
