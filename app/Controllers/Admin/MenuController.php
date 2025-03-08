<?php

namespace App\Controllers\Admin; // Use the correct namespace

use App\Controllers\BaseController;
use App\Models\Admin\MenuModel;

class MenuController extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    // List all menus
    public function index()
    {
        //$data['menus'] = $this->menuModel->getMenusWithParent();
        //return view('admin/menu/list', $data);
        $data = [
            'title' => 'Manage Menu',
             'menus' => $this->menuModel->getMenusWithParent()
        ];

          // Load the header, dashboard, and footer views with data
        return view('admin/header',$data).view('admin/menu/list', $data).view('admin/footer', $data);

    }

    // Show add menu form
    public function add()
    {
        $data['parentMenus'] = $this->menuModel->getParentMenus();
        return view('admin/menu/add', $data);
    }

    // Save menu
    public function save()
    {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'url'   => 'required|max_length[255]',
        ];

        if ($this->validate($rules)) {
            $this->menuModel->save([
                'parent_id' => $this->request->getPost('parent_id'),
                'title'     => $this->request->getPost('title'),
                'url'       => $this->request->getPost('url'),
            ]);

            return redirect()->to('/menu')->with('success', 'Menu added successfully.');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    // Show edit menu form
    public function edit($id)    {
        $menuModel = new MenuModel();
        $data = [
            'title' => 'Edit Menu',
             'menu' => $menuModel->find($id)
        ];

        if (empty($data['menu'])) {
            return redirect()->to('admin/menu')->with('error', 'Menu item not found.');
        }
        // Fetch parent menus
        $data['parentMenus'] = $menuModel->where('parent_id', null)->findAll();
        return view('admin/header',$data).view('admin/menu/edit', $data).view('admin/footer', $data);
    }

    

    public function update($id)   {
        
        // Load the model
        $menuModel = new MenuModel();        

         // Load the validation service
         //$validation = \Config\Services::validation();

         $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'url'   => 'required|max_length[255]',
        ];
 
         // Set validation rules
         if (!$this->validate($rules)) {
             // If validation fails, return to the form with errors
             return redirect()->back()->withInput()->with('validation', $this->validator);
         }


        if ($this->validate($rules)) {
            $data = [                                       
                    'title'     => $this->request->getPost('title'),
                    'url'       => $this->request->getPost('url'),
                    'parent_id'       => $this->request->getPost('parent_id'),
            ];
           // echo $id; exit;
            // Update the user
            $menuModel->update($id, $data);
            return redirect()->to('admin/menu')->with('success', 'Menu updated successfully.');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        
    }

    // Delete menu
    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->to('admin/menu')->with('success', 'Menu deleted successfully.');
    }
}