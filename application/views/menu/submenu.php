<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewSubMenuModal">Tambah SubMenu Baru</a>

            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Url</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($subMenu as $sm) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $sm['title']; ?></td>
                                    <td><?= $sm['menu']; ?></td>
                                    <td><?= $sm['url']; ?></td>
                                    <td><?= $sm['icon']; ?></td>
                                    <td><?= $sm['is_active']; ?></td>
                                    <td>
                                        <a href="<?= base_url('menu/submenu/' . $sm['id']); ?>" data-toggle="modal" data-target="#editSubmenuModal<?= $sm['id']; ?>" class="btn btn-success btn-circle btn-sm" data-popup="tooltip" data-placement="top" title="Edit Submenu"><i class="fas fa-pencil-alt"></i></a>
                                        <!-- <a href="<?= base_url('menu/hapusSubmenu/' . $sm['id']); ?>" onclick="return confirm('Anda yakin ingin menghapus Submenu <?= $sm['title']; ?> ?');" class="btn btn-danger btn-circle btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Submenu"><i class="fa fa-trash"></i></a> -->
                                        <a href="" data-toggle="modal" data-target="#deleteModal<?= $sm['id']; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="NewSubMenuModal" tabindex="-1" aria-labelledby="NewSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class=" modal-title" id="editSubmenuModalLabel">Tambah Submenu</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Judul submenu">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Pilih menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"> <?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Url submenu">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon submenu">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active ?
                            </label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal edit-->
<?php $no = 0;
foreach ($subMenu as $sm) : $no++; ?>
    <div class="modal fade" id="editSubmenuModal<?= $sm['id']; ?>">
        <div class="modal-dialog">
            <form action="<?= base_url('menu/editSubmenu'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-light">
                        <h5 class=" modal-title" id="editSubmenuModalLabel">Edit Sub Menu</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" readonly value="<?= $sm['id']; ?>" name="id" class="form-control">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="title" id="title" autocomplete="off" value="<?= $sm['title']; ?>" required placeholder="title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="">-Pilih Menu-</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <!-- cara menampilkan field dropdown yang sudah terselected di database -->
                                        <option value="<?= $m['id']; ?>" <?= $m['id'] == $sm['menu_id'] ? "selected" : null ?>><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="url" id="url" autocomplete="off" value="<?= $sm['url']; ?>" required placeholder="url" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="icon" id="icon" autocomplete="off" value="<?= $sm['icon']; ?>" required placeholder="icon" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <?php if ($sm['is_active'] == '1') : ?>
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                <?php else : ?>
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active">
                                <?php endif; ?>
                                <label class="form-check-label" for="is_active">
                                    Aktif
                                </label>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endforeach; ?>

<!-- modal delete -->
<?php $no = 0;
foreach ($subMenu as $sm) : $no++; ?>
    <div class="modal fade" id="deleteModal<?= $sm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class=" modal-title" id="editSubmenuModalLabel">Hapus data ?</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">Pilih <b>Hapus</b> untuk menghapus data.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('menu/hapusSubmenu/') . $sm['id'] ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>