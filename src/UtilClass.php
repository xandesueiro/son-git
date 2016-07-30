<?php

class UtilClass{

	//singleton
	public static $instance;


    private function __construct() {
        //aplicando padrao singleton
    }	

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new UtilClass();
        }

        return self::$instance;
    }
	
	function getDataAtual($formato){
		$data = new DateTime();
        return $data->format($formato); 
	}

	function getHoraAtual($formato){
		date_default_timezone_set('America/Sao_Paulo');
		$hora = date($formato); 
		return $hora;
	}

}
?>
