<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?= base_url('download/pdf') ?>">PDF</a>
                        <a class="dropdown-item" href="<?= base_url('download/excel') ?>">Excel</a>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Email</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($petugas as $p) : ?>
                                    <tr>
                                        <td scope="row"><?= $i ?></td>
                                        <td><?= $p['name']; ?></td>
                                        <td><?= $p['desa']; ?></td>
                                        <td><?= $p['kecamatan']; ?></td>
                                        <td><?= $p['email']; ?></td>
                                        <td><?= date('d F Y', $user['date_created']); ?></td>
                                        <td>
                                            <!-- masih -->
                                            <?php

                                            if ($p['is_active'] == 1) { ?>
                                                <a href="" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-check"></i></a>
                                            <?php } else { ?>
                                                <a href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-times"></i></a>
                                            <?php }
                                            ?>


                                            <a href="" data-toggle="modal" data-target="#editPetugasModal<?= $p['id_user']; ?>" class="btn btn-success btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                            <!-- <a href="<?= base_url('admin/hapusPetugas/') . $p['id_user']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a> -->
                                            <a href="" data-toggle="modal" data-target="#deleteModal<?= $p['id_user']; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<!-- modal edit petugas -->
<?php $no = 1;
foreach ($petugas as $p) : $no++; ?>
    <div class="modal fade bd-example-modal-lg" id="editPetugasModal<?= $p['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="editPetugasModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class=" modal-title" id="editPetugasModalLabel">Edit Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?= base_url('admin/editPetugas'); ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" readonly value="<?= $p['id_user']; ?>" name="id_user" class="form-control">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" value="<?= $p['name']; ?>" placeholder="Nama Petugas">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="desa" id="desa" value="<?= $p['desa']; ?>" placeholder="Desa">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $p['kecamatan']; ?>" placeholder="Kode Pos">
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
foreach ($petugas as $p) : $no++; ?>
    <div class="modal fade" id="deleteModal<?= $p['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class=" modal-title" id="editSubmenuModalLabel">Hapus data ?</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">Pilih <b>Hapus</b> untuk menghapus data.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('admin/hapusPetugas') . "/" . $p['id_user'] ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>