<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= form_error('wilayah', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <!-- <a href="" class="btn btn-primary" data-toggle="modal" data-target="#KecamatanModal">Tambah Data Kecamatan</a> -->
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
                    <h6 class="m-0 font-weight-bold text-primary">Kecamatan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Kode Kecamatan</th>
                                    <th>Kode Pos</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($wilayah as $w) : ?>
                                    <tr>
                                        <td scope="row"><?= $i ?></td>
                                        <td><?= $w['nama_kecamatan']; ?></td>
                                        <td><?= $w['kode_kecamatan']; ?></td>
                                        <td><?= $w['kode_pos']; ?></td>
                                        <td>
                                            <!-- masih -->
                                            <a href="" data-toggle="modal" data-target="#InfoModal" class="btn btn-info btn-circle btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="" data-toggle="modal" data-target="#EditWilayahModal<?= $w['kecamatan_id']; ?>" class="btn btn-success btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                            <!-- <a href="<?= base_url('admin/hapusWilayah/') . $w['kecamatan_id']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a> -->
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


<!-- Modal tambah-->
<div class="modal fade" id="KecamatanModal" tabindex="-1" role="dialog" aria-labelledby="KecamatanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class=" modal-title" id="editSubmenuModalLabel">Tambah Kecamatan</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?= base_url('Admin/wilayah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" placeholder="Nama Kecamatan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kode_kecamatan" name="kode_kecamatan" placeholder="Kode Kecamatan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="InfoModal" tabindex="-1" role="dialog" aria-labelledby="InfoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light">
                <h5 class=" modal-title" id="editSubmenuModalLabel">Tabel Desa / Kecamatan</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="container md-1">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Desa</th>
                            <th scope="col">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- modal edit wilayah -->
<?php $no = 1;
foreach ($wilayah as $w) : $no++; ?>
    <div class="modal fade bd-example-modal-lg" id="EditWilayahModal<?= $w['kecamatan_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="EditWilayahModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class=" modal-title" id="EditWilayahModalLabel">Edit Kecamatan</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?= base_url('admin/editWilayah'); ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" readonly value="<?= $w['kecamatan_id']; ?>" name="kecamatan_id" id="kecamatan_id" class="form-control">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama_kecamatan" id="nama_kecamatan" value=<?= $w['nama_kecamatan']; ?> placeholder="Nama Kecamatan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kode_kecamatan" id="kode_kecamatan" value=<?= $w['kode_kecamatan']; ?> placeholder="Kode Kecamatan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kode_pos" id="kode_pos" value=<?= $w['kode_pos']; ?> placeholder="Kode Pos">
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