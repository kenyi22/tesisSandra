<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoTipo_Notificacion
 *
 * @author kenyi
 */

require_once 'Conexion.php';
require_once '../model/Tipo_Notificacion.php';

class DaoTipo_Notificacion {
    
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }
    
    public function listarTipo_NotificacionxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_tipo_notificación where id_tipo_notificacion='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Tipo_Notificacion($re[0], $re[1], $re[2]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function listarTipo_Notificacion() {
                                         try {
            $sql = "SELECT * FROM tbl_tipo_notificación order by id_tipo_notificacion";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Tipo_Notificacion($re[0], $re[1], $re[2]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function codAutTipo_Notificacion() {
                                              try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_tipo_notificación";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Tipo_Notificacion($re[0]);
                if (is_null($objUsua->getID_TIPO_NOTIFICACION())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_TIPO_NOTIFICACION() > 0 and $objUsua->getID_TIPO_NOTIFICACION() < 10) {
                    $lista = "DA00000" . $objUsua->getID_TIPO_NOTIFICACION();
                } else if ($objUsua->getID_TIPO_NOTIFICACION() > 9) {
                    $lista = "DA0000" . $objUsua->getID_TIPO_NOTIFICACION();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }  
    }
    
    public function registrarTipo_Notificacion($ID_TIPO_NOTIFICACION,$ESTADO,$NOMBRE) {
                                              try {
            $sql = " INSERT INTO tbl_tipo_notificación (Id_Tipo_Notificación,Estado,Nombre) "
                    . "VALUES ('$ID_TIPO_NOTIFICACION','$ESTADO','$NOMBRE')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
    
    public function actualizarTipo_Notificacion($ID_TIPO_NOTIFICACION,$ESTADO,$NOMBRE) {
                                        try {
            $sql = "UPDATE tbl_tipo_notificación SET "
                    . "Nombre='$NOMBRE',"
                    . "Estado='$ESTADO' WHERE Id_Tipo_Notificación='$ID_TIPO_NOTIFICACION' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;  
    }
}
