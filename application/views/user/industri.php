<!-- Begin Page Content -->
<div class="container-fluid">
    <script>
        $(document).on('click', '#viewmarker', viewmarker);
    </script>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Lokasi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="map-canvas" style="height: 800px;"></div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php echo form_open_multipart('user/Industri'); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" id="id_user" name="id_user" value="<?= $user['name']; ?>">
                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik">
                            <?= form_error('nama_pemilik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tlp" name="tlp" placeholder="No Telp">
                        </div>
                        <hr>
                        <div class="form-group">
                            <select class="browser-default custom-select" name="kecamatan" id="kecamatan">
                                <option selected>-- Kecamatan --</option>
                                <?php foreach ($setKecamatan as $sk) : ?>
                                    <option value="<?= $sk['nama_kecamatan']; ?>"> <?= $sk['nama_kecamatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="desa" name="desa" placeholder="Desa">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="dukuh" name="dukuh" placeholder="Dukuh">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="jalan" name="jalan" placeholder="Jalan">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="rt" name="rt" placeholder="RT">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="rw" name="rw" placeholder="RW">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <select class="browser-default custom-select" name="jenis" id="jenis">
                                <option selected>-- Jenis --</option>
                                <?php foreach ($setJenis as $sj) : ?>
                                    <option value="<?= $sj['jenis_industri']; ?>"> <?= $sj['jenis_industri']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="pemasaran" name="pemasaran" placeholder="Pemasaran">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="pendapatan" name="pendapatan" placeholder="Pendapatan Pertahun">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude (-)" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude (+)" readonly>
                        </div>
                        <label for="upload">upload gambar lokasi (*maks 2 MB)</label>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="images" name="images" onchange="profile()">
                                    <label class=" custom-file-label" for="images">Choose file</label>
                                    <?= form_error('images', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="reset" id="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">

            <?= form_error('wilayah', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#IndustriModal">Tambah Data Industri</a> -->
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
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Industri</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Dukuh</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Jalan</th>
                                    <th>Jenis</th>
                                    <th>Merk</th>
                                    <th>Pemasaran</th>
                                    <th>Pendapatan/thn</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($Industri as $ii) : ?>
                                    <tr>
                                        <td scope="row"><?= $i ?></td>
                                        <td><?= $ii['nama_pemilik']; ?></td>
                                        <td><?= $ii['kecamatan']; ?></td>
                                        <td><?= $ii['desa']; ?></td>
                                        <td><?= $ii['dukuh']; ?></td>
                                        <td><?= $ii['rt']; ?></td>
                                        <td><?= $ii['rw']; ?></td>
                                        <td><?= $ii['jalan']; ?></td>
                                        <td><?= $ii['jenis']; ?></td>
                                        <td><?= $ii['merk']; ?></td>
                                        <td><?= $ii['pemasaran']; ?></td>
                                        <td><?= $ii['pendapatan']; ?></td>
                                        <td><?= $ii['latitude']; ?></td>
                                        <td><?= $ii['longitude']; ?></td>
                                        <td>
                                            <img class="img-thumbnail" src="<?= base_url('./img-industri/') . $ii['images']; ?>" alt="">
                                        </td>
                                        <td>
                                            <!-- masih -->
                                            <a href="" id="viewmarker" class="btn btn-info btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editIndustriModal<?= $ii['industri_id']; ?>" class="btn btn-success btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal<?= $ii['industri_id']; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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


<!-- Modal edit data -->
<?php $no = 1;
foreach ($Industri as $ii) : $no++; ?>
    <div class="modal fade" id="editIndustriModal<?= $ii['industri_id']; ?>" tabindex="-1" aria-labelledby="editIndustriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class=" modal-title" id="editSubmenuModalLabel">Edit Data Industri</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <?php echo form_open_multipart('user/editIndustri'); ?>
                <div class="modal-body">
                    <input type="hidden" readonly value="<?= $ii['industri_id']; ?>" name="industri_id" class="form-control">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" value="<?= $ii['nama_pemilik']; ?>" placeholder="Nama Pemilik">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tlp" id="tlp" value="<?= $ii['tlp']; ?>" placeholder="No Telp">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $ii['kecamatan']; ?>" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="desa" id="desa" value="<?= $ii['desa']; ?>" placeholder="Desa">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="rt" id="rt" value="<?= $ii['rt']; ?>" placeholder="RT">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="rw" id="rw" value="<?= $ii['rw']; ?>" placeholder="RW">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jalan" id="jalan" value="<?= $ii['jalan']; ?>" placeholder="Jalan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="latitude" id="latitude" value="<?= $ii['latitude']; ?>" placeholder="Latitude">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="longitude" id="longitude" value="<?= $ii['longitude']; ?>" placeholder="Longitude">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jenis" id="jenis" value="<?= $ii['jenis']; ?>" placeholder="Jenis">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="merk" id="merk" value="<?= $ii['merk']; ?>" placeholder="Merk">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pemasaran" id="pemasaran" value="<?= $ii['pemasaran']; ?>" placeholder="Pemasaran">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pendapatan" id="pendapatan" value="<?= $ii['pendapatan']; ?>" placeholder="Pendapatan">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="image">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="images" name="images" onchange="profile()">
                                <label class=" custom-file-label" for="images">Choose file</label>
                            </div>
                        </div>
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
<!-- end modal -->

<!-- delete Modal-->
<?php $no = 1;
foreach ($Industri as $ii) : $no++; ?>
    <div class="modal fade" id="deleteModal<?= $ii['industri_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class=" modal-title" id="editSubmenuModalLabel">Hapus data ?</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">Pilih <b>Hapus</b> untuk menghapus data.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('user/hapusIndustri') . "/" . $ii['industri_id'] . "/" . $ii['images']; ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>



<!--Modal: MAP-->
<div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body mb-0 p-0">
                <!--Google map-->
                <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
                    <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-info btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
                <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>