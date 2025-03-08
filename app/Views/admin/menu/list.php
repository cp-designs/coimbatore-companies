<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo esc($title); ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">View Menu</li>
                        </ol>
                    
                    
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List Menu
                            </div>
                            <div class="card-body">
                            <table border="1" id="datatablesSimple">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>URL</th>
                <th>Parent Menu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menus as $menu): ?>
                <tr>
                    <td><?= esc($menu['id']) ?></td>
                    <td><?= esc($menu['title']) ?></td>
                    <td><?= esc($menu['url']) ?></td>
                    <td><?= esc($menu['parent_title'] ?? 'None') ?></td>
                    <td>

                    <table>
                        <tr>
                            <td><a href="<?php echo site_url('admin/menu/edit/' . $menu['id']) ?>"><i class="fa-solid fa-pen-to-square" style="color:green;"></i></a></td>
                            <td>&nbsp;</td>
                            <td><a href="<?= site_url('admin/menu/delete/' . $menu['id']) ?>" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can" style="color:red;"></i></a></td>
                        </tr>
                    </table>

                        
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                                
                            </div>
                        </div>
                    </div>
                </main>