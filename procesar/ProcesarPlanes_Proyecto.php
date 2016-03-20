<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProcesarActividad
 *
 * @author kenyi
 */
require_once '../control/ControlPlanes_Proyecto.php';

session_start();



//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

//obteniendo la informacion
$ID_PLANES_PROYECTO = $_POST["cod"];
$ID_TIPO_PLAN = $_POST["descrRol"];
$ID_PROYECTO = $_POST["estado"];

$objN1 = new ControlPlanes_Proyecto();
$result1 = $objN1->registrarPlanes_Proyecto($ID_PLANES_PROYECTO, $ID_TIPO_PLAN, $ID_PROYECTO);
if ($result1) {
echo " 
                <script language='JavaScript' type='text/javascript'> 
                alert('Registro exitoso');
                window.location=('../view/pages/listarRol.php');             
        </script>";
} else {
echo " 
                <script language='JavaScript' type='text/javascript'> 
                alert('No se pudo registrar al usuario');
                window.location=('../view/pages/nuevoRol.php');              
        </script>";
}
}




