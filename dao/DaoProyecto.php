<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoProyecto
 *
 * @author kenyi
 */

require_once 'Conexion.php';
require_once '../model/Proyecto.php';

class DaoProyecto {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarProyectoxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_proyecto where Id_Proyecto='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Proyecto($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7], $re[8]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarProyecto() {
        try {
            $sql = "SELECT * FROM tbl_proyecto order by Id_Proyecto";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Proyecto($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7], $re[8]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutProyecto() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_proyecto";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Proyecto($re[0]);
                if (is_null($objUsua->getID_PROYECTO())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_PROYECTO() > 0 and $objUsua->getID_PROYECTO() < 10) {
                    $lista = "DA00000" . $objUsua->getID_PROYECTO();
                } else if ($objUsua->getID_PROYECTO() > 9) {
                    $lista = "DA0000" . $objUsua->getID_PROYECTO();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarProyecto($ID_PROYECTO, $NOMBRE, $FECHA_INICIO, $FECHA_FIN, $DESCRIPCION, $COSTO, $PRECIO, $FECHA_REGISTRO, $ESTADO) {
        try {
            $sql = " INSERT INTO tbl_proyecto (Id_Proyecto,Nombre,Fecha_Inicio,Fecha_Fin,Descripción,Costo,Precio,Fecha_de_Registro,Estado) "
                    . "VALUES ('$ID_PROYECTO','$NOMBRE','$FECHA_INICIO','$FECHA_FIN','$DESCRIPCION','$COSTO','$PRECIO','$FECHA_REGISTRO','$ESTADO')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarProyecto($ID_PROYECTO, $NOMBRE, $FECHA_INICIO, $FECHA_FIN, $DESCRIPCION, $COSTO, $PRECIO, $FECHA_REGISTRO, $ESTADO) {
        try {
            $sql = "UPDATE tbl_proyecto SET "
                    . "Estado='$ESTADO',"
                    . "Fecha_de_Registro='$FECHA_REGISTRO',"
                    . "Precio='$PRECIO',"
                    . "Costo='$COSTO',"
                    . "Descripción='$DESCRIPCION',"
                    . "Fecha_Fin='$FECHA_FIN',"
                    . "Fecha_Inicio='$FECHA_INICIO',"
                    . "Nombre='$NOMBRE' WHERE Id_Proyecto='$ID_PROYECTO' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
