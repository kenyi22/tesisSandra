<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoRequerimiento
 *
 * @author kenyi
 */

require_once 'Conexion.php';
require_once '../model/Requerimiento.php';

class DaoRequerimiento {
    
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarRequerimientoxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_requerimiento where Id_Requerimiento='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Requerimiento($re[0], $re[1], $re[2], $re[3], $re[4]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarRequerimiento() {
        try {
            $sql = "SELECT * FROM tbl_requerimiento order by Id_Requerimiento";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Requerimiento($re[0], $re[1], $re[2], $re[3], $re[4]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutRequerimiento() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_requerimiento";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new DETALCANCE($re[0]);
                if (is_null($objUsua->getID_REQUERIMIENTO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_REQUERIMIENTO() > 0 and $objUsua->getID_REQUERIMIENTO() < 10) {
                    $lista = "DA00000" . $objUsua->getID_REQUERIMIENTO();
                } else if ($objUsua->getID_REQUERIMIENTO() > 9) {
                    $lista = "DA0000" . $objUsua->getID_REQUERIMIENTO();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarRequerimiento($ID_REQUERIMIENTO, $ID_PROYECTO, $NOMBRE, $DESCRIPCION, $ESTADO) {
        try {
            $sql = " INSERT INTO tbl_requerimiento (Id_Requerimiento,Nombre,Descripción,Estado,Id_Proyecto) "
                    . "VALUES ('$ID_REQUERIMIENTO','$ID_PROYECTO','$NOMBRE','$DESCRIPCION','$ESTADO')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarRequerimiento($ID_REQUERIMIENTO, $ID_PROYECTO, $NOMBRE, $DESCRIPCION, $ESTADO) {
        try {
            $sql = "UPDATE tbl_requerimiento SET "
                    . "	Estado='$ESTADO',"
                    . "Descripción='$DESCRIPCION',"
                    . "Nombre='$NOMBRE',"
                    . "Id_Proyecto='$ID_PROYECTO' WHERE Id_Requerimiento='$ID_REQUERIMIENTO' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
