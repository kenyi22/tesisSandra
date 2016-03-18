<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoUsuario
 *
 * @author kenyi
 */
class DaoUsuario {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }
    
    public function listarUsuarioxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_usuario where Id_Usuario='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Usuario($re[0], $re[1], $re[2]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function listarUsuario() {
                                     try {
            $sql = "SELECT * FROM tbl_usuario order by Id_Usuario";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Usuario($re[0], $re[1], $re[2]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function codAutUsuario() {
                                              try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_usuario";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Usuario($re[0]);
                if (is_null($objUsua->getID_USUARIO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_USUARIO() > 0 and $objUsua->getDETALCANCE() < 10) {
                    $lista = "DA00000" . $objUsua->getDETALCANCE();
                } else if ($objUsua->getID_USUARIO() > 9) {
                    $lista = "DA0000" . $objUsua->getDETALCANCE();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }  
    }
    
    public function registrarUsuario($ID_USUARIO,$NOMBRE,$ESTADO) {
                                              try {
            $sql = " INSERT INTO tbl_usuario (Id_Usuario,Nombre,Estado) "
                    . "VALUES ('$ID_USUARIO','$NOMBRE','$ESTADO')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
    
    public function actualizarUsuario($ID_USUARIO,$NOMBRE,$ESTADO) {
                                        try {
            $sql = "UPDATE tbl_usuario SET "
                    . "Nombre='$NOMBRE',"
                    . "Estado='$ESTADO' WHERE Id_Usuario='$ID_USUARIO' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;  
    }
}
