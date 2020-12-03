<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Industri</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $industri ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-street-view fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Petugas Pendataan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $petugas ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Kecamatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kecamatan ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thumbtack fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jenis Industri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $petugas ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-pie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!--Section: Contact v.1-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <!--Google map-->
                    <div id="map-canvas" style="height: 500px;"></div>
                    <br>
                    <!-- <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> -->

                    <!--Buttons-->
                    <!-- <div class="row text-center">
                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
                            <p>Jl Krakatau, Kecamatan Kajen</p>
                            <p>Kabupaten Pekalongan</p>
                        </div>
                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
                            <p>+ 01 234 567 89</p>
                            <p>Mon - Fri, 8:00-22:00</p>
                        </div>
                        <div class="col-md-4">
                            <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
                            <p>info@gmail.com</p>
                            <p>sale@gmail.com</p>
                        </div>
                    </div> -->
                </div>
                <!--Grid column-->
            </div>
        </div>

        <div class="col-lg-5 mb-4">
            <!--Form with header-->
            <div class="card">
                <div class="card-body">
                    <!--Header-->
                    <div class="form-header blue accent-1">
                        <h4>Cari Berdasarkan:</h4>
                    </div>
                    <br>
                    <!--Body-->
                    <div class="md-form">
                        <label for="kecamatan"><i class="fas fa-map-marker-alt"></i> Kecamatan</label>
                        <select class="browser-default custom-select" name="kecamatan" id="kecamatan">
                            <option selected>-- Kecamatan --</option>
                            <?php foreach ($setKecamatan as $sk) : ?>
                                <option value="<?= $sk['nama_kecamatan']; ?>"> <?= $sk['nama_kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>
                    <div class="md-form">
                        <label for="jenis"><i class="fas fa-shopping-cart"></i> Jenis Produk</label>
                        <select class="browser-default custom-select" name="jenis" id="jenis">
                            <option selected>-- Jenis --</option>
                            <?php foreach ($setJenis as $sj) : ?>
                                <option value="<?= $sj['jenis_industri']; ?>"> <?= $sj['jenis_industri']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>
                    <hr>

                    <div class="md-form">
                        <h4>Legenda</h4>
                        <img class="img-fluid" width="40px" src="assets/img/icons/1.png"> Kue Basah <br>
                        <img class="img-fluid" width="40px" src="assets/img/icons/2.png"> Kue Kering <br>
                        <img class="img-fluid" width="40px" src="assets/img/icons/3.png"> Keripik <br>
                        <img class="img-fluid" width="40px" src="assets/img/icons/4.png"> Lopis <br>
                        <img class="img-fluid" width="40px" src="assets/img/icons/5.png"> peyek <br>
                    </div>
                </div>

            </div>
            <!--Form with header-->
        </div>
        <!--Grid column-->

    </div><br>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<style>
    .map-container-6 {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container-6 iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>