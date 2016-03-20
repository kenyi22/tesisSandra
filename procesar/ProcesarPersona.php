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
require_once '../control/ControlPersona.php';

session_start();



//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

//obteniendo la informacion
$ID_PERSONA = $_POST["cod"];
$NOMBRE = $_POST["cod"];
$APEPATERNO = $_POST["cod"];
$APEMATERNO = $_POST["cod"];
$DNI = $_POST["cod"];
$RUC = $_POST["cod"];
$CORREO = $_POST["cod"];
$TELEFONO = $_POST["cod"];
$ESTADO = $_POST["cod"];
$FECHA_REGISTRO = $_POST["cod"];

$objN1 = new ControlPersona();
$result1 = $objN1->registrarPersona($ID_PERSONA, $NOMBRE, $APEPATERNO, $APEMATERNO, $DNI, $RUC, $CORREO, $TELEFONO, $ESTADO, $FECHA_REGISTRO);
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




