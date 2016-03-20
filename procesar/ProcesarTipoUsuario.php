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
require_once '../control/ControlTipoUsuario.php';

session_start();



//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

//obteniendo la informacion
$ID_USUARIO = $_POST["cod"];
$ID_PERSONA = $_POST["descrRol"];
$NOMBRE_USUARIO = $_POST["estado"];
$CONTRASENNA = $_POST["nomRol"];

$objN1 = new ControlTipoUsuario();
$result1 = $objN1->registrarTipoUsuario($ID_USUARIO, $ID_PERSONA, $NOMBRE_USUARIO, $CONTRASENNA);
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




