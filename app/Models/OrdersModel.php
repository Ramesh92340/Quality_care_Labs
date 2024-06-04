<?php
namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'payment_id',
        'cart_ids',
        'user_id',
        'details',
        'status',
        'total_amount',
        'created_at'
    ];
}