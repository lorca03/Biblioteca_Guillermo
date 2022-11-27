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

  .añadirEntidad {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  #AñadirEntidad {
    padding: 10px;
    background-color: #f05c8f;
    color: white;
    border: 1px solid white;
    border-radius: 20px;
  }

  form input[type="number"] {
    margin-left: 2%;
    border-radius: 5px;
    font-size: 16px;
  }

  #tituloPersonal {
    text-align: center;
    color: #f05c8f;
    text-shadow: 2px 2px 3px #71c5d0;
  }

  #tituloPersonal h1 {
    color: #f05c8f;
  }

  #tablaLibrosUsuario {
    text-align: center;
    color: #71c5d0;
    border: #f05c8f;
  }

  #tablaLibrosUsuario tbody{
    color: white;
  }
  tbody input{
    width: 50%;
  }
  .dataTable-wrapper {
    color: #71c5d0;
  }

  .dataTable-wrapper th {
    text-align: center;
  }

  .dataTable-search input {
    border-radius: 10px;
    border: 1px solid white;
    background-color: transparent;
    box-shadow: 1px 1px 3px #71c5d0;
    color: #f05c8f;
  }

  .dataTable-selector {
    background-color: transparent;
    border-radius: 10px;
    border: 1px solid white;
    box-shadow: 1px 1px 3px #71c5d0;
    color: #f05c8f;
  }

  .dataTable-pagination-list a {
    color: white;
    background-color: #f05c8f;
  }

  .dataTable-pagination-list a:hover {
    color: #f05c8f;
    background-color: white;
  }

  .active a {
    color: white;
    background-color: #71c5d0 !important;
  }

  .active a:hover {
    color: white;
    background-color: #71c5d0 !important;
  }

  #contselectUsuarios {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #contselectUsuarios button{
    padding: 8px;
    background-color: #f05c8f;
    color: white;
    border: 1px solid white;
    border-radius: 20px;
  }
  #selectUsuarios {
    padding: 5px;
    background-color: transparent;
    border-radius: 10px;
    border: 1px solid white;
    box-shadow:1px 1px 3px #71c5d0;
    color: #f05c8f;
  }
</style>

<body>

  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php require_once 'partials/header.part.php'   ?>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          <div class="row" id="tituloPersonal">
            <h1>Personal</h1>
          </div>
          <br>
          <div class="conatiner" id="contselectUsuarios">
            <form action="" id="formUsuarios" method="post">
              <select name="selectUsuarios" id="selectUsuarios">
                <?php echo $optionsUsuario ?>
              </select>
              <button type="submit" id="MostraLibros" name="MostraLibros">Mostrar Libros</button>
            </form>
          </div>
          <br>
          <div class="container librosUsuario">
            <table class="table" id="tablaLibrosUsuario">
              <thead>
                <tr>
                  <th scope="col">Num Pedido</th>
                  <th scope="col">Libro</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Fecha salida</th>
                  <th scope="col">Fecha maxima devolucion</th>
                  <th scope="col">Fecha devolucion</th>
                  <th scope="col">Devuelto</th>
                </tr>
              </thead>
              <tbody>
                <?php
                echo $filastabla;
                ?>
              </tbody>
            </table>
          </div>
          <br>
          <div class="container añadirEntidad">
            <button type="submit" id="AñadirEntidad" onclick="añadir('Usuario')">Añadir Usuario</button>
            <form action="" id="formEntidad" style="display: none;" method="post">
              <div class="row">
                <label>Nombre</label>
                <input required type="text" name="Nombre">
              </div>
              <div class="row">
                <label>Apellidos</label>
                <input required type="text" name="Apellidos">
              </div>
              <div class="row">
                <label>DNI</label>
                <input required type="text" name="DNI">
              </div>
              <div class="row">
                <label>Domicilio</label>
                <input required type="text" name="Domicilio">
              </div>
              <div class="row">
                <label>Poblacion</label>
                <input type="text" name="Poblacion">
              </div>
              <div class="row">
                <label>Fecha de nacimiento</label>
                <input required type="text" name="Fecha">
              </div>
              <br>
              <input type="submit" id="enviarEntidad" name="enviar" value="Enviar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const dataTable = new simpleDatatables.DataTable("#tablaLibrosUsuario", {
      labels: {
        placeholder: "Buscar...",
        perPage: "{select} &nbsp;&nbsp;Numero de libros por pagina",
        noRows:'Este usuario no tiene libros' ,
        info: "Libros del {start} al {end}.",
      }
    })
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