<?php

namespace App\Models\Admin; // Use the correct namespace

use CodeIgniter\Model;

class UserModel extends Model
{
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password'];
    protected $returnType = 'array';
}