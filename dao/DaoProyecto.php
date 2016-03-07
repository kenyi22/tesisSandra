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
class DaoProyecto {
    
    public function listarProyectoxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_proyecto where CodRolPrivilegio='" . $codigo . "'";
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
    
    public function listarProyecto() {
                             try {
            $sql = "SELECT * FROM tbl_proyecto order by CodUsuario";
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
    
    public function codAutProyecto() {
                             try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_proyecto";
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
    
    public function registrarProyecto($ID_PROYECTO,$NOMBRE,$FECHA_INICIO,$FECHA_FIN,$DESCRIPCION,$COSTO,$PRECIO,$FECHA_REGISTRO,$ESTADO) {
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
    
    public function actualizarProyecto($ID_PROYECTO,$NOMBRE,$FECHA_INICIO,$FECHA_FIN,$DESCRIPCION,$COSTO,$PRECIO,$FECHA_REGISTRO,$ESTADO) {
                              try {
            $sql = "UPDATE tbl_proyecto SET "
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
