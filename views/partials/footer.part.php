<style>
  .imagenes {
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
        require_once 'entity/colaborador.php';
        require_once 'database/conexion.php';
        $config = require 'app/config.php';
        $conexion = Conexion::make($config);
        $constructor = array(
          'nombre',
          'descripcion',
          'imagen'
        );
        $consulta2 = 'SELECT * FROM COLABOLADORES';
        $resultado2 = $conexion->prepare($consulta2);
        $resultado2->execute();
        $arraycolab = $resultado2->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Colaborador', $constructor);
        shuffle($arraycolab);
        ?>
        <div class="container imagenes">
          <?php
           for ($i=0; $i < 3; $i++) { 
            echo "<img src='" . $arraycolab[$i]->getUrlImagen() . "' alt='" . $arraycolab[$i]->getDescripcion() . "'>";
          } ?>

        </div>
      </div>
    </div>
  </div>
</footer>