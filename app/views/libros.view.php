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

  #tituloLibros {
    text-align: center;
    color: #f05c8f;
    text-shadow: 2px 2px 3px #71c5d0;
  }

  #tituloLibros h1 {
    color: #f05c8f;
  }

  #tablaLibros {
    text-align: center;
    color: #71c5d0;
    border: #f05c8f;
  }

  #tablaLibros tbody {
    color: white;
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

  .verde {
    color: #7AE03F;
  }

  .rojo {
    color: #E0383E;
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
          <div class="row" id="tituloLibros">
            <h1>Libros</h1>
          </div>
          <br>
          <div class="container libros">
            <table class="table" id="tablaLibros">
              <thead>
                <tr>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Género</th>
                  <th scope="col">País</th>
                  <th scope="col">Paginas</th>
                  <th scope="col">Año edicion</th>
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
          <div class="container añadirEntidad">
            <button type="submit" id="AñadirEntidad" onclick="añadir('Libro')">Añadir Libro</button>
            <form action="" id="formEntidad" style="display: none;" method="post">
              <div class="row">
                <label>Nombre</label>
                <input required type="text" name="Nombre">
              </div>
              <div class="row">
                <label>Autor</label>
                <input required type="text" name="Autor">
              </div>
              <div class="row">
                <label>Género</label>
                <input required type="text" name="Genero">
              </div>
              <div class="row">
                <label>País</label>
                <input required type="text" name="Pais">
              </div>
              <div class="row">
                <label>Paginas</label>
                <input type="number" name="Paginas">
              </div>
              <div class="row">
                <label>Año</label>
                <input required type="number" name="Año">
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
    const dataTable = new simpleDatatables.DataTable("#tablaLibros", {
      labels: {
        placeholder: "Buscar...",
        perPage: "{select} &nbsp;&nbsp;Numero de libros por pagina",
        noRows: "No exixten libros con estas caracteristicas",
        info: "Libros del {start} al {end}. Total: {rows} ",
      }
    })
  </script>
  <?php require_once 'partials/footer.part.php'   ?>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>



</body>

</html>