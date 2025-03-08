<?php

namespace App\Controllers\Admin; // Use the correct namespace

use App\Controllers\BaseController;

class Users extends BaseController {
    public function index(){
        echo 'users list dashboard';
        //return view('admin/dashboard'); // Load the admin view
    }


    public function list() {
        $userModel = new \App\Models\Admin\UserModel();
        $data['title'] = 'List of Users 11';
        $data['users'] = $userModel->findAll(); // Fetch all users from the database
        return view('admin/users/list', $data);
    }

    
    public function view($id) {
        return "Viewing user with ID: $id";
    }

    
    public function add() {
        return "Add a new user";
    }

    
    public function edit($id) {
        return "Editing user with ID: $id";
    }

    
    public function delete($id) {
        return "Deleting user with ID: $id";
    }


}
