<?php

include_once 'Fdb.php';


class FCarta_Di_Credito extends Fdb
{
	
	protected function __construct()
	{
		
		#parent::__construct();

		$this->table='Carta_di_credito';
		$this->key='Numero';
		$this->return_class='ECarta_Di_Credito';
	}

	public function insert()
    {

    }
}

?>