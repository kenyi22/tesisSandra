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
require_once '../control/ControlProyecto.php';

session_start();



//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

//obteniendo la informacion
$ID_PROYECTO = $_POST["cod"];
$NOMBRE = $_POST["cod"];
$FECHA_INICIO = $_POST["cod"];
$FECHA_FIN = $_POST["cod"];
$DESCRIPCION = $_POST["cod"];
$COSTO = $_POST["cod"];
$PRECIO = $_POST["cod"];
$FECHA_REGISTRO = $_POST["cod"];
$ESTADO = $_POST["cod"];

$objN1 = new ControlProyecto();
$result1 = $objN1->registrarProyecto($ID_PROYECTO, $NOMBRE, $FECHA_INICIO, $FECHA_FIN, $DESCRIPCION, $COSTO, $PRECIO, $FECHA_REGISTRO, $ESTADO);
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




