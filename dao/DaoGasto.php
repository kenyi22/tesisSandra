<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoGasto
 *
 * @author kenyi
 */
class DaoGasto {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }
    
    public function listarGastoxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_gasto where Id_Gasto='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Gasto($re[0], $re[1], $re[2]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function listarGasto() {
        try {
            $sql = "SELECT * FROM tbl_gasto order by Id_Gasto";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Gasto($re[0], $re[1], $re[2]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function codAutGasto() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_gasto";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Gasto($re[0]);
                if (is_null($objUsua->getID_GASTO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_GASTO() > 0 and $objUsua->getID_GASTO() < 10) {
                    $lista = "DA00000" . $objUsua->getID_GASTO();
                } else if ($objUsua->getID_GASTO() > 9) {
                    $lista = "DA0000" . $objUsua->getID_GASTO();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }
    
    public function registrarGasto($ID_GASTO,$ID_TIPO_GASTO,$PROYECTO) {
         try {
            $sql = " INSERT INTO tbl_gasto (Id_Gasto,Monto,Estado,Id_Proyecto,Id_Tipo_Gasto) "
                    . "VALUES ('$codPerxProxPet','$codPersonal','$codPeticion','$FecRegis','$estado')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
    
    public function actualizarActividad($ID_GASTO,$ID_TIPO_GASTO,$PROYECTO) {
        try {
            $sql = "UPDATE tbl_gasto SET "
                    . "codPersona='$persona',"
                    . "estado='$estado' WHERE codPerxProxPet='$codigo' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
}
