<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author kenyi
 */
class Conexion {
    
    private $con = "";
    private $server = "localhost";
    private $user = "tesiskuc_kenyi";
    private $pass = "maquina";
    private $db = "tesiskuc_bd";

    function __construct() {
        $this->con = mysql_connect($this->server, $this->user, $this->pass);
        mysql_select_db($this->db, $this->con);
    }
}
