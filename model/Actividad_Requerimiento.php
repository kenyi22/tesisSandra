<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Actividad_Requerimiento
 *
 * @author kenyi
 */
class Actividad_Requerimiento {
    PRIVATE $ID_ACTIVIDAD_REQUERIMIENTOS;
    PRIVATE $ESTADO;
    
    function __construct($ID_ACTIVIDAD_REQUERIMIENTOS=null, $ESTADO=null) {
        $this->ID_ACTIVIDAD_REQUERIMIENTOS = is_null($ID_ACTIVIDAD_REQUERIMIENTOS) ? $this->ID_ACTIVIDAD_REQUERIMIENTOS : $ID_ACTIVIDAD_REQUERIMIENTOS;
        $this->ESTADO = is_null($ESTADO) ? $this->ESTADO : $ESTADO;
    }
    
    function getID_ACTIVIDAD_REQUERIMIENTOS() {
        return $this->ID_ACTIVIDAD_REQUERIMIENTOS;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_ACTIVIDAD_REQUERIMIENTOS($ID_ACTIVIDAD_REQUERIMIENTOS) {
        $this->ID_ACTIVIDAD_REQUERIMIENTOS = $ID_ACTIVIDAD_REQUERIMIENTOS;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



}
