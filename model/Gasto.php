<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gasto
 *
 * @author kenyi
 */
class Gasto {
   PRIVATE $ID_GASTO;
   PRIVATE $ID_TIPO_GASTO;
   PRIVATE $PROYECTO;
   
   function __construct($ID_GASTO, $ID_TIPO_GASTO, $PROYECTO) {
       $this->ID_GASTO = $ID_GASTO;
       $this->ID_TIPO_GASTO = $ID_TIPO_GASTO;
       $this->PROYECTO = $PROYECTO;
   }
   
   function getID_GASTO() {
       return $this->ID_GASTO;
   }

   function getID_TIPO_GASTO() {
       return $this->ID_TIPO_GASTO;
   }

   function getPROYECTO() {
       return $this->PROYECTO;
   }

   function setID_GASTO($ID_GASTO) {
       $this->ID_GASTO = $ID_GASTO;
   }

   function setID_TIPO_GASTO($ID_TIPO_GASTO) {
       $this->ID_TIPO_GASTO = $ID_TIPO_GASTO;
   }

   function setPROYECTO($PROYECTO) {
       $this->PROYECTO = $PROYECTO;
   }



}
