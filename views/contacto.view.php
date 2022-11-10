<!DOCTYPE html>
<html lang="en">

<?php
require_once 'partials/head.php';
?>

<body>

  <!-- ***** Preloader Start ***** -->
  <?php
  require_once 'partials/preload.php';
  ?>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php require_once 'partials/header.part.php'   ?>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          <h1 id="contacta">Contacta con nosotros</h1>
          <div class="row">
            <div class="col-6">
              <form action="" method="post">
                <div class="row">
                  <label>Nombre</label>
                  <input type="text" name="name" value="<?php if (isset($nombre) && $error==true) {
                                                          echo $nombre;
                                                        } else {
                                                          echo '';
                                                        } ?>">
                </div>
                <div class="row">
                  <label>E-mail</label>
                  <input type="email" name="email" value="<?php if (isset($email) && $error==true && $erroremail==false) {
                                                            echo $email;
                                                          }else {
                                                            echo '';
                                                          }?>">
                </div>
                <div class="row">
                  <label>Mensaje</label>
                  <textarea name="mensaje" cols="30" rows="5" name="mensaje"><?php if (isset($mensaje) && $error==true) {
                                                                                      echo $mensaje;
                                                                                    }else {
                                                                                      echo '';
                                                                                    } ?></textarea>
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

  <?php require_once 'partials/footer.part.php'   ?>


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