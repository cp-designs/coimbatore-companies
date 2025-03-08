<?php

namespace App\Models\Theme; // Use the correct namespace

use CodeIgniter\Model;

class HomeModel extends Model
{
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password'];
    protected $returnType = 'array';
}