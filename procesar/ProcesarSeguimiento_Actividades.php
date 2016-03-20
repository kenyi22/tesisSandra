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
require_once '../control/ControlSeguimiento_Actividades.php';

session_start();

//A. NUEVO-->REGISTRO
//1. Registrar Rol--->ok
if (isset($_POST["nue_rol"])) {

//obteniendo la informacion
    $ID_SEGUIMIENTO = $_POST["cod"];
    $ID_ACTIVIDAD = $_POST["cod"];
    $ID_USUARIO = $_POST["cod"];
    $ACCION = $_POST["cod"];
    $PORCENTAJE = $_POST["cod"];
    $FECHA = $_POST["cod"];
    $HORA = $_POST["cod"];
    $DETALLE = $_POST["cod"];

    $objN1 = new ControlSeguimiento_Actividades();
    $result1 = $objN1->registrarSeguimiento_Actividades($ID_SEGUIMIENTO, $ID_ACTIVIDAD, $ID_USUARIO, $ACCION, $PORCENTAJE, $FECHA, $HORA, $DETALLE);
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




