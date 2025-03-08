<?php

namespace App\Models\Admin; // Use the correct namespace
use CodeIgniter\Model;

class MenuModel extends Model
{
    
   /* protected $table      = 'menus';
    protected $primaryKey = 'id';

    protected $allowedFields = ['parent_id', 'title', 'url'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at'; */

    protected $table      = 'menus';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'parent_id', 'title', 'url', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Fetch all menus with parent-child relationships
    public function getMenusWithParent()
    {
        return $this->select('menus.*, p.title as parent_title')
                    ->join('menus p', 'menus.parent_id = p.id', 'left')
                    ->orderBy('menus.id', 'asc')
                    ->findAll();
    }

    // Fetch all parent menus (for dropdown)
    public function getParentMenus()
    {
        return $this->where('parent_id', null)->findAll();
    }

    // Fetch all menus ordered by parent_id
    public function getMenus()
    {
        return $this->orderBy('parent_id', 'asc')->findAll();
    }

    // Update menu parent_id and order
    public function updateMenuOrder(array $menuData)
    {

        // Log the data being processed
        log_message('debug', 'Updating menu order: ' . print_r($menuData, true));

        foreach ($menuData as $item) {

        // Log each item being updated
        log_message('debug', 'Updating menu item: ' . print_r($item, true));

        // Update the menu item in the database
        $this->update($item['id'], [
            'parent_id' => $item['parent_id'],
        ]);
        }
    }

}