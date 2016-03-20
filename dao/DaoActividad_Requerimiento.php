<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoActividad_Requerimiento
 *
 * @author kenyi
 */

require_once 'Conexion.php';
require_once '../model/Actividad_Requerimiento.php';

class daoActividad_Requerimiento {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }
    
    public function listarActividadxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_actividad_x_requerimiento where CodRolPrivilegio='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new ROLPRIVILEGIO($re[0], $re[1], $re[2], $re[4], $re[3]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarActividad() {
        try {
            $sql = "SELECT * FROM tbl_actividad_x_requerimiento order by CodUsuario";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new USUARIO($re[0], $re[1], $re[2], $re[3], $re[4]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutActividad() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_actividad_x_requerimiento";
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
            $sql = " INSERT INTO tbl_actividad_x_requerimiento (Id_Actividades_Requerimientos,Estado) "
                    . "VALUES ('$codPerxProxPet','$codPersonal','$codPeticion','$FecRegis','$estado')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarActividad($ID_ACTIVIDAD, $ID_USUARIO, $NOMBRE, $DESCRIPCION, $FECHA_HORA_INICIO, $COSTO, $FECHA_REGISTRO, $ESTADO, $PRIORIDAD, $COMPLEJIDAD) {
        try {
            $sql = "UPDATE perxproxpet SET "
                    . "codPersona='$persona',"
                    . "codPeticion='$peticion',"
                    . "estado='$estado' WHERE tbl_actividad_x_requerimiento='$codigo' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
}
