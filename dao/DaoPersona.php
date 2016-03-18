<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPersona
 *
 * @author kenyi
 */
class DaoPersona {
    
    PRIVATE $con="";
    
    function __construct() {
        $this->con=new Conexion();
    }

    public function listarPersonaxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_persona where Id_Persona='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Persona($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7], $re[8]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarPersona() {
        try {
            $sql = "SELECT * FROM tbl_persona order by 	Id_Persona";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new Persona($re[0], $re[1], $re[2], $re[3], $re[4], $re[5], $re[6], $re[7], $re[8]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutPersona() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_persona";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new Persona($re[0]);
                if (is_null($objUsua->getID_PERSONA())) {
                    $lista = "DA000001";
                } else if ($objUsua->getID_PERSONA() > 0 and $objUsua->getID_PERSONA() < 10) {
                    $lista = "DA00000" . $objUsua->getID_PERSONA();
                } else if ($objUsua->getID_PERSONA() > 9) {
                    $lista = "DA0000" . $objUsua->getID_PERSONA();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarPersona($ID_PERSONA, $NOMBRE, $APEPATERNO, $APEMATERNO, $DNI, $RUC, $CORREO, $TELEFONO, $ESTADO, $FECHA_REGISTRO) {
        try {
            $sql = " INSERT INTO tbl_persona (Id_Persona,Nombres,Apellido_Paterno,Apellido_Materno,Dni,Ruc,Correo,Telefono,Estado,Fecha_Registro) "
                    . "VALUES ('$ID_PERSONA','$NOMBRE','$APEPATERNO','$APEMATERNO','$DNI','$RUC','$CORREO','$TELEFONO','$ESTADO','$FECHA_REGISTRO')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarPersona($ID_PERSONA, $NOMBRE, $APEPATERNO, $APEMATERNO, $DNI, $RUC, $CORREO, $TELEFONO, $ESTADO, $FECHA_REGISTRO) {
        try {
            $sql = "UPDATE tbl_persona SET "
                    . "Fecha_Registro='$FECHA_REGISTRO',"
                    . "Estado='$ESTADO',"
                    . "Telefono='$TELEFONO',"
                    . "Correo='$CORREO',"
                    . "Ruc='$RUC',"
                    . "	Dni='$DNI',"
                    . "Apellido_Materno='$APEMATERNO',"
                    . "Apellido_Paterno='$APEPATERNO',"
                    . "Nombres='$NOMBRE' WHERE Id_Persona='$ID_PERSONA' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

}
