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

  #tituloHome {
    text-align: center;
    color: #f05c8f;
    background-color: transparent !important;
  }
  #tituloHome h1{
    color: #f05c8f;
    text-shadow:2px 2px 3px #71c5d0;
  }
  #tituloHome img{
    width: 80px;
  }
  #tituloHome .home{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
  }
  #totales .total {
    margin-top: 8px;
    text-align: center;
    padding: 12px;
    height: 85px;
    box-shadow:2px 2px 5px #71c5d0;
    border-radius: 20px;
    border: 2px solid #71c5d0;
  }
  #totales .total h3{
    color: white ;
    font-weight: 500;
  }
  #totales .total h4{
    color: #f05c8f;
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
          <div class="row" id="tituloHome">
            <div class="col home">
            <img src="/assets/images/libros.PNG"><h1>Home</h1></div>
          </div><br><br>
          <div class="row" id="totales">
            <div class="col"></div>
            <div class="col total"><h3>Usuarios</h3><h4><?php echo $totales[0]; ?></h4>
            </div>
            <div class="col"></div>
            <div class="col total"><h3>Libros</h3><h4><?php echo $totales[1]; ?></h4></div>
            <div class="col"></div>
            <div class="col total"><h3>Prestamos</h3><h4><?php echo $totales[2]; ?></h4></div>
            <div class="col"></div>
          </div>
          <br>
          <div class="row" id="totales">
            <div class="col"></div>
            <div class="col total"><h3>Colaboradores</h3><h4><?php echo $totales[4]; ?></h4></div>
            <div class="col"></div>
            <div class="col total"><h3>Mensajes</h3><h4><?php echo $totales[3]; ?></h4></div>
            <div class="col"></div>
          </div>
          <br>
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