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
require_once '../control/ControlActividad_Requerimiento.php';

session_start();



//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

//obteniendo la informacion
$ID_ACTIVIDAD_REQUERIMIENTOS = $_POST["cod"];
$ESTADO = $_POST["descrRol"];

$objN1 = new ControlActividad_Requerimiento();
$result1 = $objN1->registrarActividad_Requerimiento($ID_ACTIVIDAD_REQUERIMIENTOS, $ESTADO);
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




