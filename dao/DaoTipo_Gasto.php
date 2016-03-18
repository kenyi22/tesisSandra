<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoTipo_Gasto
 *
 * @author kenyi
 */
class DaoTipo_Gasto {
    
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }
    
    public function listarTipo_GastoxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_tipo_gasto where 	Id_Tipo_Gasto='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Tipo_Gasto($re[0], $re[1]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function listarActividad() {
                                         try {
            $sql = "SELECT * FROM tbl_tipo_gasto order by Id_Tipo_Gasto";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Tipo_Gasto($re[0], $re[1]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function codAutTipo_Gasto() {
                                               try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_tipo_gasto";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new DETALCANCE($re[0]);
                if (is_null($objUsua->getID_TIPO_GASTO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_TIPO_GASTO() > 0 and $objUsua->getID_TIPO_GASTO() < 10) {
                    $lista = "DA00000" . $objUsua->getID_TIPO_GASTO();
                } else if ($objUsua->getID_TIPO_GASTO() > 9) {
                    $lista = "DA0000" . $objUsua->getID_TIPO_GASTO();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        } 
    }
    
    public function registrarTipo_Gasto($ID_TIPO_GASTO,$NOMBRE) {
                                              try {
            $sql = " INSERT INTO tbl_tipo_gasto (Id_Tipo_Gasto,Nombre) "
                    . "VALUES ('$ID_TIPO_GASTO','$NOMBRE')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
    
    public function actualizarTipo_Gasto($ID_TIPO_GASTO,$NOMBRE) {
                                        try {
            $sql = "UPDATE tbl_tipo_gasto SET "
                    . "Nombre='$NOMBRE' WHERE Id_Tipo_Gasto='$codigo' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;  
    }
}
