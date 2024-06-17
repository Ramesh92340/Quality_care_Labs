<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_details';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'first_name',
        'username',
        'last_name',
        'phone',
        'email',
        'password',
        'address',
    ];
}
