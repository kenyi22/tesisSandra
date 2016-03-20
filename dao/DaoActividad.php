<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoActividad
 *
 * @author kenyi
 */
require_once 'Conexion.php';
require_once '../model/Actividad.php';

class DaoActividad {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    
    public function listarActividadxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_actividad where Id_Actividad='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Actividad($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7], $re[8], $re[9]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarActividad() {
        try {
            $sql = "SELECT * FROM tbl_actividad order by Id_Actividad";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Actividad($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7], $re[8], $re[9]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutActividad() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_actividad";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new DETALCANCE($re[0]);
                if (is_null($objUsua->getDETALCANCE())) {
                    $lista = "DA000001";
                } else if ($objUsua->getDETALCANCE() > 0 and $objUsua->getDETALCANCE() < 10) {
                    $lista = "DA00000" . $objUsua->getDETALCANCE();
                } else if ($objUsua->getDETALCANCE() > 9) {
                    $lista = "DA0000" . $objUsua->getDETALCANCE();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarActividad($ID_ACTIVIDAD, $ID_USUARIO, $NOMBRE, $DESCRIPCION, $FECHA_HORA_INICIO, $COSTO, $FECHA_REGISTRO, $ESTADO, $PRIORIDAD, $COMPLEJIDAD) {
        try {
            $sql = " INSERT INTO tbl_actividad (Id_Actividad,Nombre,Descripción,Fecha_Hora_Inicio,Fecha_Hora_Fin,Costo,Fecha_Registro,Estado,Prioridad,Complejidad,Id_Usuario) "
                    . "VALUES ('$ID_ACTIVIDAD','$ID_USUARIO','$NOMBRE','$DESCRIPCION','$FECHA_HORA_INICIO','$COSTO','$FECHA_REGISTRO','$ESTADO','$PRIORIDAD','$COMPLEJIDAD')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarActividad($ID_ACTIVIDAD, $ID_USUARIO, $NOMBRE, $DESCRIPCION, $FECHA_HORA_INICIO, $COSTO, $FECHA_REGISTRO, $ESTADO, $PRIORIDAD, $COMPLEJIDAD) {
        try {
            $sql = "UPDATE tbl_actividad SET "
                    . "Nombre='$persona',"
                    . "Descripción='$peticion',"
                    . "estado='$estado' WHERE Id_Actividad='$codigo' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
