<?php
$repoPersonal=new UsuarioRepositorio();
$arrayUsuarios=$repoPersonal->findAll();
$optionsUsuario='';
$filastabla='<th COLSPAN="7">Selecciona un usuario</th>';
$select = !empty($_POST['selectUsuarios']) ? $_POST['selectUsuarios'] : null;
for ($i=0; $i < count($arrayUsuarios); $i++) { 
    if ($select==$arrayUsuarios[$i]->getnombre().' '. $arrayUsuarios[$i]->getApellidos()) {
        $optionsUsuario.= "<option selected>". $arrayUsuarios[$i]->getnombre().' '. $arrayUsuarios[$i]->getApellidos() ."</option>";
    }else{
     $optionsUsuario.= "<option>". $arrayUsuarios[$i]->getnombre().' '. $arrayUsuarios[$i]->getApellidos() ."</option>";
    }
}
if (isset($_POST['MostraLibros'])) {
    $filastabla='';
    $repoPrestamos=new PrestamosRepositorio();
    $arrayLibrosUsuario=$repoPrestamos->librosUsuario($select);
    for ($i=0; $i < count($arrayLibrosUsuario); $i++) { 
        $options='';
        if ($arrayLibrosUsuario[$i]->getDevuelto()=='true') {
            $options.="<option selected>true</option><option >false</option>";
        }else{
            $options.="<option >true</option><option selected>false</option>";
        }
        $filastabla .= "<tr>
        <th scope='row' style='color: #71c5d0;'>" . $arrayLibrosUsuario[$i]->getNum_pedido() . "</th>   
        <td>" .$arrayLibrosUsuario[$i]->getCod_libro() . "</td>
        <td>" . $arrayLibrosUsuario[$i]->getCod_usuario() ."</td>
        <td>" . $arrayLibrosUsuario[$i]->getFecha_salida() . "</td>
        <td> <input value=". $arrayLibrosUsuario[$i]->getFecha_maxima_dev() ."> </input></td>
        <td><input require value=".  $arrayLibrosUsuario[$i]->getFecha_devolucion() ."> </input></td>
        <td>  <select name='selectUsuarios' id='selectUsuarios'>". $options  . "</select></td>
      </tr>";
    };
}


$enviar = !empty($_POST['enviar']) ? $_POST['enviar'] : null;
try {
    if ($enviar === 'Enviar') {
        $repoPersonal->save(new Usuario('',$_POST['Nombre'],$_POST['Apellidos'],$_POST['DNI'],$_POST['Domicilio'],$_POST['Poblacion'],$_POST['Fecha']));
    }
} catch (Exception $ex) {
    echo "<script> alert('" . $ex->getMessage() . "')</script>";
}

require_once 'app/views/personal.view.php'; 

$selectColab = new ColaboradorRepositorio();
$arraycolab = $selectColab->findAll();
shuffle($arraycolab);
?>
<div class="container imagenesFooter">
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<img src='" . $arraycolab[$i]->getUrlImagen() . "' alt='" . $arraycolab[$i]->getDescripcion() . "'>";
    } ?>

</div>