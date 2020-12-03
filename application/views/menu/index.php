                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewMenuModal">Tambah Menu Baru</a>

                            <div class="card">
                                <div class="card-body">
                                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    <?= $this->session->flashdata('message'); ?>

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Menu</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($menu as $m) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i ?></th>
                                                    <td><?= $m['menu']; ?></td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#editMenuModal<?= $m['id']; ?>" class="btn btn-success btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                                        <!-- <a href="<?= base_url('menu/hapusMenu/' . $m['id']); ?>" onclick="return confirm('Anda yakin ingin hapus menu <?= $m['menu']; ?> ?');" class="btn btn-danger btn-circle btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Menu"><i class="fa fa-trash"></i></a> -->
                                                        <a href="" data-toggle="modal" data-target="#deleteModal<?= $m['id']; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Modal -->
                <div class="modal fade" id="NewMenuModal" tabindex="-1" aria-labelledby="NewMenuModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-light">
                                <h5 class=" modal-title" id="editSubmenuModalLabel">Tambah Menu Baru</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form action="<?= base_url('menu'); ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu Baru">
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

                <!-- edit sub menu -->
                <?php $no = 1;
                foreach ($menu as $m) : $no++; ?>
                    <div class="modal fade" id="editMenuModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editMenuModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-light">
                                    <h5 class=" modal-title" id="editSubmenuModalLabel">Edit Role</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form action="<?= base_url('menu/editMenu'); ?>" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" readonly value="<?= $m['id']; ?>" name="id" class="form-control">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="menu" id="menu" value=<?= $m['menu']; ?> placeholder="Nama menu">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- modal delete -->
                <?php $no = 1;
                foreach ($menu as $m) : $no++; ?>
                    <div class="modal fade" id="deleteModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-light">
                                    <h5 class=" modal-title" id="editSubmenuModalLabel">Hapus data ?</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">Pilih <b>Hapus</b> untuk menghapus data.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="<?= base_url('menu/hapusMenu/') . $m['id'] ?>">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>