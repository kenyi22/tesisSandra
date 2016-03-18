<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoTipoUsuario
 *
 * @author kenyi
 */
class DaoTipoUsuario {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarTipoUsuarioxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_tipo_usuario where Id_Usuario='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new TipoUsuario($re[0], $re[1], $re[2], $re[3]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarTipoUsuario() {
        try {
            $sql = "SELECT * FROM tbl_tipo_usuario order by Id_Usuario";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new TipoUsuario($re[0], $re[1], $re[2], $re[3]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutTipoUsuario() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_tipo_usuario";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new DETALCANCE($re[0]);
                if (is_null($objUsua->getID_USUARIO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_USUARIO() > 0 and $objUsua->getID_USUARIO() < 10) {
                    $lista = "DA00000" . $objUsua->getID_USUARIO();
                } else if ($objUsua->getID_USUARIO() > 9) {
                    $lista = "DA0000" . $objUsua->getID_USUARIO();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarTipoUsuario($ID_USUARIO, $ID_PERSONA, $NOMBRE_USUARIO, $CONTRASENNA) {
        try {
            $sql = " INSERT INTO tbl_tipo_usuario (Id_Usuario,Nombre_Usuario,Contraseña,Id_Persona) "
                    . "VALUES ('$ID_USUARIO','$ID_PERSONA','$NOMBRE_USUARIO','$CONTRASENNA')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarTipoUsuario($ID_USUARIO, $ID_PERSONA, $NOMBRE_USUARIO, $CONTRASENNA) {
        try {
            $sql = "UPDATE tbl_tipo_usuario SET "
                    . "Nombre_Usuario='$NOMBRE_USUARIO',"
                    . "Contraseña='$CONTRASENNA' WHERE Id_Usuario='$ID_USUARIO' and Id_Persona='$ID_PERSONA'";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
