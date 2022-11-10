<style>
  .imagenes{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  img {
    width: 150px;
    height: 90px;
  }
</style>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
        </p>
        <br>
        <?php
        require_once 'entity/colaboladores.php';
        $colaboladores = array(
          new Colabolador('Maria', 'Imagen de Maria', 'colaboladorMaria.jfif'),
          new Colabolador('Jose', 'Imagen de Jose', 'colaboladorJose.jfif'),
          new Colabolador('Pepe', 'Imagen de Pepe', 'colaboladorPepe.jfif')
        );
        shuffle($colaboladores);
        ?>
        <div class="container imagenes">
          <?php
          foreach ($colaboladores as $colabolador) {
            echo "<img src='" . $colabolador->getUrlImagen() . "' alt='" . $colabolador->getDescripcion() . "'>";
          } ?>

        </div>
      </div>
    </div>
  </div>
</footer>