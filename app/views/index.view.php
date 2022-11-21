<!DOCTYPE html>
<html lang="es">
<?php
require_once 'app/views/partials/head.php';
?>
<style>
.imagenesFooter {
    display: flex;
    justify-content: center;
    align-items: center;
}

.imagenesFooter img {
    width: 150px;
    height: 90px;
}
</style>
<body>


  <!-- ***** Header Area Start ***** -->
  <?php
  require_once 'app/views/partials/header.part.php';
  ?>

  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          <h1>Home</h1>
        </div>
      </div>
    </div>
  </div>

  <?php require_once 'app/views/partials/footer.part.php';
  ?>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  

</body>
</html>