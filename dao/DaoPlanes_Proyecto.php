<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPlanes_Proyecto
 *
 * @author kenyi
 */


require_once 'Conexion.php';
require_once '../model/Planes_Proyecto.php';

class DaoPlanes_Proyecto {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarPlanes_ProyectoxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_planes_proyecto where Id_Planes_Proyecto='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Planes_Proyecto($re[0], $re[1], $re[2]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarPlanes_Proyecto() {
        try {
            $sql = "SELECT * FROM tbl_planes_proyecto order by Id_Planes_Proyecto";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Planes_Proyecto($re[0], $re[1], $re[2]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutPlanes_Proyecto() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_planes_proyecto";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Planes_Proyecto($re[0]);
                if (is_null($objUsua->getID_PLANES_PROYECTO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_PLANES_PROYECTO() > 0 and $objUsua->getID_PLANES_PROYECTO() < 10) {
                    $lista = "DA00000" . $objUsua->getID_PLANES_PROYECTO();
                } else if ($objUsua->getID_PLANES_PROYECTO() > 9) {
                    $lista = "DA0000" . $objUsua->getID_PLANES_PROYECTO();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarPlanes_Proyecto($ID_PLANES_PROYECTO, $ESTADO,$ID_TIPO_PLAN, $ID_PROYECTO) {
        try {
            $sql = " INSERT INTO tbl_planes_proyecto (Id_Planes_Proyecto,Estado,Id_Tipo_Plan,Id_Proyecto) "
                    . "VALUES ('$ID_PLANES_PROYECTO','$ESTADO','$ID_TIPO_PLAN','$ID_PROYECTO')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarPlanes_Proyecto($ID_PLANES_PROYECTO, $ESTADO,$ID_TIPO_PLAN, $ID_PROYECTO) {
        try {
            $sql = "UPDATE tbl_planes_proyecto SET "
                    . "Estado='$ESTADO',"
                    . "$ID_PROYECTO='$ID_PROYECTO',"
                    . "Id_Tipo_Plan='$ID_TIPO_PLAN' WHERE Id_Planes_Proyecto='$ID_PLANES_PROYECTO' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
