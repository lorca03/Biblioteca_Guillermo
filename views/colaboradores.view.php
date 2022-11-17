<!DOCTYPE html>
<html lang="es">

<?php  
  require_once 'partials/head.php';   
   ?>

<body>

  <!-- ***** Preloader Start ***** -->
  <?php
//require_once 'partials/preload.php';
?>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php   require_once 'partials/header.part.php'   ?>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          <h1 id="titulo">Colaboradores</h1>
          <div class="row">
            <div class="col-6">
              <form action="" method="post" enctype="multipart/form-data" >
                <div class="row">
                  <label>Nombre</label>
                  <input required type="text" name="nameCol">
                </div>
                <div class="row">
                  <label>Descripcion</label>
                  <input required type="text" name="descripcionCol">
                </div>
                <div class="row">
                  <label>Archivo</label>
                  <input required type="file" name="imagen">
                </div>
                <br>
                <input type="submit" name="enviar" value="Enviar">
              </form>
            </div>
            <div class="col-6"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php   require_once 'partials/footer.part.php'   ?>


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
