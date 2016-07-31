<?php

/**
 * Class UtilClass
 *
 */
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

    /**
     * @param $formato
     * @return string
     */
    function getDataAtual($formato){
		$data = new DateTime();
        $data->modify('-1 days'); //so estou colocando -1 dia, pq estava dando um dia a mais do que realmente era: TESTE NO LOCAlHOST
        return $data->format($formato); 
	}

    /**
     * @param $formato
     * @return bool|string
     */
    function getHoraAtual($formato){
		date_default_timezone_set('America/Sao_Paulo');
		$hora = date($formato); 
		return $hora;
	}

}
?>
