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
class DaoNotificacion {
    
    public function listarNotificacionxCod($codigo) {
        try {
            $sql = "SELECT * FROM rolprivilegio where CodRolPrivilegio='" . $codigo . "'";
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
    
    
    public function listarNotificacion() {
        try {
            $sql = "SELECT * FROM usuario order by CodUsuario";
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
    
    public function codAutNotificacion() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM detalcance";
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
    
    public function registrarNotificacion($ID_NOTIFICACION,$ID_TIPO_NOTIFICACION,$ID_PROYECTO,$ESTADO,$LEIDO,$FECHA,$HORA) {
        try {
            $sql = " INSERT INTO perxproxpet (codPerxProxPet,codPersona,codPeticion,FecRegis,estado) "
                    . "VALUES ('$codPerxProxPet','$codPersonal','$codPeticion','$FecRegis','$estado')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
    
    public function actualizarNotificacion($ID_NOTIFICACION,$ID_TIPO_NOTIFICACION,$ID_PROYECTO,$ESTADO,$LEIDO,$FECHA,$HORA) {
        try {
            $sql = "UPDATE perxproxpet SET "
                    . "codPersona='$persona',"
                    . "codPeticion='$peticion',"
                    . "estado='$estado' WHERE codPerxProxPet='$codigo' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
}
