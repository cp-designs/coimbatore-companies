<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Test extends BaseController
{
    public function index(): string
    {
		echo 'test';
        //return view('welcome_message');
    }
}
