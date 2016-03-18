<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoSeguimiento_Actividades
 *
 * @author kenyi
 */
class DaoSeguimiento_Actividades {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarSeguimiento_ActividadesxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_seguimiento_de_actividades where 	Id_Seguimientto='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Seguimiento_Actividades($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarSeguimiento_Actividades() {
        try {
            $sql = "SELECT * FROM tbl_seguimiento_de_actividades order by Id_Seguimientto";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Seguimiento_Actividades($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutSeguimiento_Actividades() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_seguimiento_de_actividades";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new DETALCANCE($re[0]);
                if (is_null($objUsua->getID_SEGUIMIENTO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_SEGUIMIENTO() > 0 and $objUsua->getID_SEGUIMIENTO() < 10) {
                    $lista = "DA00000" . $objUsua->getID_SEGUIMIENTO();
                } else if ($objUsua->getID_SEGUIMIENTO() > 9) {
                    $lista = "DA0000" . $objUsua->getID_SEGUIMIENTO();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarSeguimiento_Actividades($ID_SEGUIMIENTO, $ID_ACTIVIDAD, $ID_USUARIO, $ACCION, $PORCENTAJE, $FECHA, $HORA, $DETALLE) {
        try {
            $sql = " INSERT INTO tbl_seguimiento_de_actividades (Id_Seguimientto,Id_Actividad,Id_Usuario,Accion,Porcentaje,Fecha,Hora,Detalle) "
                    . "VALUES ('$ID_SEGUIMIENTO','$ID_ACTIVIDAD','$ID_USUARIO','$ACCION','$PORCENTAJE','$FECHA','$HORA','$DETALLE')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarSeguimiento_Actividades($ID_SEGUIMIENTO, $ID_ACTIVIDAD, $ID_USUARIO, $ACCION, $PORCENTAJE, $FECHA, $HORA, $DETALLE) {
        try {
            $sql = "UPDATE tbl_seguimiento_de_actividades SET "
                    . "Id_Actividad='$ID_ACTIVIDAD',"
                    . "Id_Usuario = '$ID_USUARIO', "
                    . "Accion = '$ACCION',"
                    . "Porcentaje = '$PORCENTAJE', "
                    . "Fecha = '$FECHA', "
                    . "Detalle = '$DETALLE', "
                    . "Hora = '$HORA' WHERE Id_Seguimientto = '$ID_SEGUIMIENTO' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
