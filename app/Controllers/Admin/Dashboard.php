<?php

namespace App\Controllers\Admin; // Use the correct namespace

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // Data to pass to the views
        $data = [
            'title' => 'Admin Dashboard',
            'username' => 'JohnDoe',
            'notifications' => [
                'New user registered',
                'System update available',
            ],
        ];
        
          // Load the header, dashboard, and footer views with data
        return view('admin/header',$data).view('admin/dashboard', $data).view('admin/footer', $data);
    }
}