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
require_once '../control/ControlActividad.php';

session_start();

//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

//obteniendo la informacion
$ID_ACTIVIDAD = $_POST["cod"]; 
$ID_USUARIO = $_POST["cod"];
$NOMBRE = $_POST["cod"];
$DESCRIPCION = $_POST["cod"];
$FECHA_HORA_INICIO = $_POST["cod"];
$COSTO = $_POST["cod"];
$FECHA_REGISTRO = $_POST["cod"];
$ESTADO = $_POST["cod"];
$PRIORIDAD = $_POST["cod"];
$COMPLEJIDAD = $_POST["cod"];

$objN1 = new ControlActividad();
$result1 = $objN1->registrarActividad($ID_ACTIVIDAD, $ID_USUARIO, $NOMBRE, $DESCRIPCION, $FECHA_HORA_INICIO, $COSTO, $FECHA_REGISTRO, $ESTADO, $PRIORIDAD, $COMPLEJIDAD);
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




