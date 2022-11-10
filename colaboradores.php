<?php
require_once 'utils/activa.php';
require_once 'entity/colaborador.php';
$colaborador=new Colaborador($_POST['nameCol'],$_POST['nameCol'],$_POST['iamgen']);
require_once 'views/colaboradores.view.php';
