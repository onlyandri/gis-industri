<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>inGIS</h3>
          <p>
            Jl Krakatau, 51161 <br>
            Kecamatan Kajen <br>
            Kabupaten Pekalongan <br><br>
            <strong>Phone:</strong><br> +62 285 3830922<br>
            <strong>Email:</strong> perindagkop_kab.pekalongan@yahoo.co.id<br>
          </p>
        </div>

        <!-- <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div> -->

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Media Sosial</h4>
          <p>untuk mendapatkan informasi terupdate bisa ikuti media sosial kami :</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 footer-links">
          <h4>Maps Lokasi</h4>
          <ul>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15839.510302243812!2d109.5905831!3d-7.0236738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91cad18f3180f5e!2sDisperindag%20Kabupaten%20Pekalongan!5e0!3m2!1sid!2sid!4v1606705793411!5m2!1sid!2sid" width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/frontend/'); ?>assets/js/main.js"></script>

<style>
  /*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
  .counts {
    padding-top: 0;
  }

  .counts .counters span {
    font-size: 48px;
    display: block;
    color: #16df7e;
    font-weight: 700;
  }

  .counts .counters p {
    padding: 0;
    margin: 0 0 20px 0;
    font-family: "Raleway", sans-serif;
    font-size: 14px;
    font-weight: 600;
  }
</style>

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
    google.maps.event.addListener(map, 'rightclick', addLatLng); //ambil koordinat dengan klik kanan
    google.maps.event.addListener(map, "rightclick", function(event) { //saat klik kanan mengambil data koordinat latitude dan longitude
      var lat = event.latLng.lat();
      var lng = event.latLng.lng();
      $('#latitude').val(lat);
      $('#longitude').val(lng);
      //alert(lat +" dan "+lng);
    });
  }

  function addLatLng(event) {
    var marker = new google.maps.Marker({
      position: event.latLng,
      title: 'Simple GIS',
      map: map
    });
    markers.push(marker);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>

</html>