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

    #contactaContai {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 30px;
    }

    #contacta {
        width: 350px;
        height: 270px;
    }
</style>
<body>


<!-- ***** Header Area Start ***** -->
<?php require_once 'partials/header.part.php' ?>
<!-- ***** Header Area End ***** -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">
                <h1 id="titulo">Contacta con nosotros</h1>
                <div class="row">
                    <div class="col-6">
                        <form action="" method="post">
                            <div class="row">
                                <label>Nombre</label>
                                <input type="text" name="name" value="<?php if (isset($nombre) && $error == true) {
                                    echo $nombre;
                                } else {
                                    echo '';
                                } ?>">
                            </div>
                            <div class="row">
                                <label>E-mail</label>
                                <input type="email" name="email"
                                       value="<?php if (isset($email) && $error == true && $erroremail == false) {
                                           echo $email;
                                       } else {
                                           echo '';
                                       } ?>">
                            </div>
                            <div class="row">
                                <label>Localidad</label>
                                <input type="text" name="localidad"
                                       value="<?php if (isset($localidad) && $error == true && $errorlocalidad == false) {
                                    echo $localidad;
                                } else {
                                    echo '';
                                } ?>">
                            </div>
                            <div class="row">
                                <label>Mensaje</label>
                                <textarea name="mensaje" cols="30" rows="5"
                                          name="mensaje"><?php if (isset($mensaje) && $error == true) {
                                        echo $mensaje;
                                    } else {
                                        echo '';
                                    } ?></textarea>
                            </div>
                            <br>
                            <input type="submit" name="enviar" value="Enviar">
                        </form>
                    </div>
                    <div id="contactaContai" class="col-6">
                        <img id="contacta" src="assets/images/contacta.PNG" alt="NO Funciona la imagen">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.part.php' ?>


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