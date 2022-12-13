<!DOCTYPE html>
<html lang="es">

<?php
require_once 'partials/head.php';
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

  #AñadirEntidad,
  #AñadirEntidad2 {
    margin-top: 8px;
    padding: 10px;
    background-color: #f05c8f;
    color: white;
    margin-left: 50%;
    transform: translateX(-50%);
    border: 1px solid white;
    border-radius: 20px;
  }

  input[type="text"]{
    width: 80%;
  }
  .selects{
    width: 80%;
    margin-left: 2%;
  border-radius: 5px;
  font-size: 16px;
  }

  #titulo {
    text-align: center;
    color: #f05c8f;
    text-shadow: 2px 2px 3px #71c5d0;
  }
</style>

<body>
  <!-- ***** Header Area Start ***** -->
  <?php require_once 'partials/header.part.php'   ?>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          <div class="row">
            <div class="col-6 añadirEntidad">
              <h1 id="titulo">Colaboradores</h1>
              <button type="submit" id="AñadirEntidad" onclick="añadir('Colaborador')">Añadir Colaborador</button>
              <form action="" method="post" id="formEntidad" style="display: none;" enctype="multipart/form-data">
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
            <div class="col-6 añadirEntidad2">
              <h1 id="titulo">Prestamo</h1>
              <button type="submit" id="AñadirEntidad2" onclick="añadir2('Prestamo')">Añadir Prestamo</button>
              <form action="" method="post" id="formEntidad2" style="display: none;" enctype="multipart/form-data">
                <div class="row">
                  <label>Codigo libro</label>
                  <select required name="Libro" class="selects">
                    <option selected value="">Selecciona un libro</option>
                    <?= $filasLibros ?>
                  </select>
                </div>
                <div class="row">
                  <label>Codigo Usuario</label>
                  <select required name="usuario" class="selects">
                    <option selected value="">Selecciona un usuario</option>
                    <?= $filasUsuarios ?>
                  </select>
                </div>
                <div class="row">
                  <label>Fecha salida</label>
                  <input required type="text" name="fechaSalida">
                </div>
                <div class="row">
                  <label>Fecha maxima dev</label>
                  <input required type="text" name="fechaMaxima">
                </div>
                <br>
                <input type="submit" name="enviarPrestamo" value="Enviar">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const añadirEntidad2 = document.getElementById('AñadirEntidad2');
    const formEntidad2 = document.getElementById('formEntidad2');

    function añadir2($elemneto) {
      if (formEntidad2.style.display == 'none') {
        añadirEntidad2.textContent = 'Cerrar';
        formEntidad2.style.display = 'block';
      } else {
        añadirEntidad2.textContent = 'Añadir ' + $elemneto;
        formEntidad2.style.display = 'none';
      }
    }
  </script>

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