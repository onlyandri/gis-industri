<?php

use function PHPSTORM_META\type;
?>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy;inGIS <?= date('Y'); ?> | by Aji Prasetiyo</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class=" modal-title" id="editSubmenuModalLabel">Anda yakin akan keluar ?</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">Pilih <b>Keluar</b> untuk mengakhiri sesi anda.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>


<!-- checklis pada menu role, jika akses dicentang maka di izinkan -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });




    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        })
    });
</script>


<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

<!--Modal: maps-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvtEWZ71MgdB_u_n1p0PEh7VTKcEpM6KE&callback=initMap"></script>
<script>
    var map;
    var markers = [];

    function initialize() {
        var mapOptions = {
            zoom: 14,
            // Center di kantor kabupaten kudus
            center: new google.maps.LatLng(-7.0249205810592725, 109.58029580559835)
        };

        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // Add a listener for the click event
        // google.maps.event.addListener(map, 'click', addLatLng); //ambil koordinat dengan klik kanan
        // google.maps.event.addListener(map, "click", function(event) { //saat klik kanan mengambil data koordinat latitude dan longitude
        //     var lat = event.latLng.lat();
        //     var lng = event.latLng.lng();
        //     $('#latitude').val(lat);
        //     $('#longitude').val(lng);
        //     //alert(lat +" dan "+lng);
        // });

        $.getJSON("<?= base_url()?>user/viewmarker", function(data){
            $.each(data, function(k, v){
                var pos = {
                    lat : parseFloat(v.latitude),
                    lng : parseFloat(v.longitude)
                };
                var contentString = '<h5 align="center">'  + v.nama_desa + '</h5>' + 
                '<p align="center">'+v.id_desa+'</p>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
                var marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    animation: google.maps.Animation.BOUNCE,
                    icon: '<?php echo base_url('assets/img/icons/2.png') ?>'
                });         
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });    
        });

    }


    // function addLatLng(event) {
    //     var marker = new google.maps.Marker({
    //         position: event.latLng,
    //         title: 'Simple GIS',
    //         map: map
    //     });
    //     markers.push(marker);
    // }
    google.maps.event.addDomListener(window, 'load', initialize); //load function initialize diatas


    // function viewmarker(e) {


    //     $.getJSON("<?= base_url()?>user/viewmarker", function(data){
    //         $.each(data, function(i, field){

    //              var myLatLng = {
    //                         lat: parseFloat(data[i].longitude),
    //                         lng: parseFloat(data[i].latitude)
    //                     };

    //                      addMarker(v['nama_pemilik'], myLatLng);

    //                  })
    //     })
    // }

    //             var v_lat = parseFloat(data[i].longitude);
    //             var v_long = parseFloat(data[i].latitude);

    //     e.preventDefault();
    //     var datakoordinat = {
    //         'id_industri': $(this).data('iddatajembatan')
    //     };
    //     $.ajax({
    //         url: '<?php echo base_url("user/viewmarker") ?>',
    //         data: datakoordinat,
    //         dataType: 'json',
    //         type: 'POST',
    //         success: function(data, status) {
    //             if (data.status != 'error') {
    //                 clearmap(e);
    //                 //load marker
    //                 $.each(data.msg, function(m, n) {
    //                     var myLatLng = {
    //                         lat: parseFloat(n["latitude"]),
    //                         lng: parseFloat(n["longitude"])
    //                     };
    //                     console.log(m, n);
    //                     $.each(data.datajembatan, function(k, v) {
    //                         addMarker(v['nama_pemilik'], myLatLng);
    //                     })
    //                     return false;
    //                 })
    //                 //end load marker
    //             } else {
    //                 alert(data.msg);
    //             }
    //         }
    //     })
    // }

    // function clearmap() {
    //     e.preventDefault(); // dikomen aja
    //     $('#latitude').val('');
    //     setMapOnAll(null);
    // }

    // function reset(){
    //     $('#industri_id').val('');
    //     clearmap();
    // }

    // function deletemarker() {
    //     var id = $(this).data('industri_id');
    //     var datamarker = {
    //         'industri_id': id
    //     };
    //     console.log(datamarker);
    // }
</script>

</body>

</html>