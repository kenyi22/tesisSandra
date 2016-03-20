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
require_once '../control/ControlNotificacion.php';

session_start();



//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

$ID_NOTIFICACION= $_POST["cod"];
$ID_TIPO_NOTIFICACION= $_POST["cod"];
$ID_PROYECTO= $_POST["cod"];
$ESTADO= $_POST["cod"];
$LEIDO= $_POST["cod"];
$FECHA= $_POST["cod"];
$HORA= $_POST["cod"];

$objN1 = new ControlNotificacion();
$result1 = $objN1->registrarNotificacion($ID_NOTIFICACION, $ID_TIPO_NOTIFICACION, $ID_PROYECTO, $ESTADO, $LEIDO, $FECHA, $HORA);
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




