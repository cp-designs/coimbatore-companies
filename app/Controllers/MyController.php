<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class MyController extends BaseController
{
    public function index()
    {
        echo 'My Controller';
        //return view('my_view');
    }
}