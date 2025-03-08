<?php

namespace App\Controllers\Admin; // Use the correct namespace

use App\Controllers\BaseController;
use App\Models\Admin\MenuModel;

class AdminMenuController extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $menus = $menuModel->getMenus();

        // Build the nested menu structure
        $menuStructure = $this->buildMenuTree($menus);

        // Pass the menu structure to the view
        $data['menu'] = $menuStructure;

        return view('admin/menu/menu_view', $data);
    }

    /**
     * Build a nested menu tree structure
     *
     * @param array $menus All menu items from the database
     * @param int|null $parentId Parent ID to build the tree (default is null for root items)
     * @return array Nested menu structure
     */
    private function buildMenuTree(array $menus, ?int $parentId = null): array
    {
        $branch = [];

        foreach ($menus as $menu) {
            if ($menu['parent_id'] == $parentId) {
                // Find children of this menu item
                $children = $this->buildMenuTree($menus, $menu['id']);
                if ($children) {
                    $menu['children'] = $children;
                }
                $branch[] = $menu;
            }
        }

        return $branch;
    }

    public function saveMenuOrder()
    {
        // Log a test message
        log_message('debug', 'This is a test log message.');

        $menuModel = new MenuModel();

        // Get the JSON data from the request
        $jsonData = $this->request->getJSON();
        $menuData = json_decode(json_encode($jsonData), true);

        // Log the received data for debugging
        log_message('debug', 'Received menu data: ' . print_r($menuData, true));

        // Update the menu order in the database
        $menuModel->updateMenuOrder($menuData);

        return $this->response->setJSON(['status' => 'success']);
    }

    /**
     * Save the updated menu order via AJAX
     */
    public function _saveMenuOrder()
    {
        $menuModel = new MenuModel();

        // Get the JSON data from the request
        $jsonData = $this->request->getJSON();
        $menuData = json_decode(json_encode($jsonData), true);

        // Log the received data for debugging
        log_message('debug', 'Received menu data: ' . print_r($menuData, true));

        // Update the menu order in the database
        $menuModel->updateMenuOrder($menuData);

        return $this->response->setJSON(['status' => 'success']);
    }
}