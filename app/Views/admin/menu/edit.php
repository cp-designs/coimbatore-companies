<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Menu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Update Menu</li>
                        </ol>
                    
                        <!-- Display validation errors if any -->
                        <?php if (isset($validation)): ?>
                            <div class="alert alert-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Update Menu
                            </div>
                            <div class="card-body col-6">
                            <form action="<?= site_url("admin/menu/update/{$menu['id']}") ?>" method="post">
                        <!-- Username Field -->
                        <div class="form-group">
                            <label for="username">Title</label>                            
                            <input type="text" class="form-control" name="title" id="title" value="<?= old('title', $menu['title']) ?>">
                        </div>
                        <div>&nbsp;</div>
                        <div class="form-group">
                            <label for="username">Title</label>                            
                            <input type="text" class="form-control" name="url" id="url" value="<?= old('url', $menu['url']) ?>">                            
                        </div>
                        <div>&nbsp;</div>
                        <div class="form-group">
                            <label for="username">Parent Menu</label>  
                            <select class="form-control" name="parent_id" id="parent_id">
                                <option value="">None</option>
                                <?php foreach ($parentMenus as $parent): ?>
                                    <option value="<?= $parent['id'] ?>" <?= old('parent_id', $menu['parent_id']) == $parent['id'] ? 'selected' : '' ?>>
                                        <?= $parent['title'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div>&nbsp;</div>               
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                            </div>
                        </div>
                    </div>
                </main>