<?php


require_once 'Fdb.php';
require_once 'include.php';


class FBottiglia extends Fdb
{
	
	public function __construct()
    {
        parent::__construct();
        $this->table='Bottiglia';
        $this->key='Id';
        $this->return_class='EBottiglia';
	}
	
	
	public function insert(EBottiglia $bottiglia, $stile, $produttore)
	{
        $v = array('NULL', $bottiglia->getNome(), $bottiglia->getDescrizione(), $bottiglia->getGradazione_Alcolica(), $bottiglia->getFormato(), $bottiglia->getPrezzo(), $stile, $produttore);


        $res = $this->query("insert into $this->table values (?, ?, ?, ?, ?, ?, ?, ?)", $v);

        return $res;
	}



    public function update($colonna,$valore,$valoreChiave)
    {
        $tmp = array($valoreChiave);
        $this->query("update $this->table set $colonna='$valore' where $this->key=?", $tmp);
    }

    public function delete($colonna,$valore)
    {
        $tmp = array($valore);
        $this->query("delete from $this->table where $colonna=?" ,$tmp);
    }


    public function search($colonna, $valore)
    {
        $tmp = array($valore);
        return $this->query("SELECT * FROM $this->table WHERE $colonna = ?", $tmp);
    }

    public function retrieve()
    {
        $tmp = array();
        return $this->query("SELECT * FROM $this->table", $tmp);
    }
}


	
	
		
		
		