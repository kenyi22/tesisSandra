<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoNotificacion
 *
 * @author kenyi
 */


require_once 'Conexion.php';
require_once '../model/Notificacion.php';

class DaoNotificacion {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarNotificacionxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_notificación where Id_Notificación='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Notificacion($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarNotificacion() {
        try {
            $sql = "SELECT * FROM tbl_notificación order by Id_Notificación";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Notificacion($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutNotificacion() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_notificación";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Notificacion($re[0]);
                if (is_null($objUsua->getID_NOTIFICACION())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_NOTIFICACION() > 0 and $objUsua->getID_NOTIFICACION() < 10) {
                    $lista = "DA00000" . $objUsua->getID_NOTIFICACION();
                } else if ($objUsua->getID_NOTIFICACION() > 9) {
                    $lista = "DA0000" . $objUsua->getID_NOTIFICACION();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarNotificacion($ID_NOTIFICACION, $ID_TIPO_NOTIFICACION, $ID_PROYECTO, $ESTADO, $LEIDO, $FECHA, $HORA) {
        try {
            $sql = " INSERT INTO tbl_notificación (Id_Notificación,Estado,Leido,Fecha,Hora,Id_Tipo_Notificación,Id_Proyecto) "
                    . "VALUES ('$ID_NOTIFICACION','$ESTADO','$LEIDO','$FECHA','$HORA','$ID_TIPO_NOTIFICACION','$ID_PROYECTO')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarNotificacion($ID_NOTIFICACION, $ID_TIPO_NOTIFICACION, $ID_PROYECTO, $ESTADO, $LEIDO, $FECHA, $HORA) {
        try {
            $sql = "UPDATE tbl_notificación SET "
                    . "Hora='$HORA',"
                    . "Fecha='$FECHA',"
                    . "Leido='$LEIDO',"
                    . "Estado='$ESTADO',"
                    . "Id_Proyecto='$ID_PROYECTO',"
                    . "Id_Tipo_Notificación='$ID_TIPO_NOTIFICACION' WHERE Id_Notificación='$ID_NOTIFICACION' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
