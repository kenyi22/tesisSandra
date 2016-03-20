<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoTipo_Plan
 *
 * @author kenyi
 */


require_once 'Conexion.php';
require_once '../model/Tipo_Plan.php';

class DaoTipo_Plan {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarTipo_PlanxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_tipo_plan where Id_Tipo_Plan='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Tipo_Plan($re[0], $re[1], $re[2]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarTipo_Plan() {
        try {
            $sql = "SELECT * FROM tbl_tipo_plan order by Id_Tipo_Plan";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Tipo_Plan($re[0], $re[1], $re[2]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutTipo_Plan() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_tipo_plan";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new DETALCANCE($re[0]);
                if (is_null($objUsua->getID_TIPO_PLAN())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_TIPO_PLAN() > 0 and $objUsua->getID_TIPO_PLAN() < 10) {
                    $lista = "DA00000" . $objUsua->getDETALCANCE();
                } else if ($objUsua->getID_TIPO_PLAN() > 9) {
                    $lista = "DA0000" . $objUsua->getDETALCANCE();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarTipo_Plan($ID_TIPO_PLAN, $NOMBRE, $ESTADO) {
        try {
            $sql = " INSERT INTO tbl_tipo_plan (Id_Tipo_Plan,Nombre,Estado) "
                    . "VALUES ('$ID_TIPO_PLAN','$NOMBRE','$ESTADO')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarTipo_Plan($ID_TIPO_PLAN, $NOMBRE, $ESTADO) {
        try {
            $sql = "UPDATE tbl_tipo_plan SET "
                    . "	Estado='$ESTADO',"
                    . "	Nombre='$NOMBRE' WHERE Id_Tipo_Plan='$ID_TIPO_PLAN' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
