<?php


include_once 'Fdb.php';


class FCategoria extends Fdb
{
	
	protected function __construct()
    {
    	parent::__construct();
        $this->table='Categoria';
        $this->key='Tipo';
        $this->return_class='ECategoria';
	}
	
	
	public function insert(ECategoria $categoria)
	{
		$Colonne = "' Nome' , 'Tipo' , 'Descrizione' ";
		
		$V = array($categoria->getNome() , $categoria->getTipo() , $categoria->getDescrizione());
		$this->query("insert into $this->table values (?, ?, ?)", $V);
	}

	
	
	/** Aggiorna la colonna fornita per parametro, chiave e valore chiave servono per trovare la ennupla da modificare  */
	
	public function update($colonna,$valore,$valoreChiave)
	{
		$tmp = array($valoreChiave);
		$this->query("update $this->table set $colonna='$valore' where $this->key=?", $tmp);
	}
	
	
	/** Elimina la colonna fornita per parametro */
	
	public function delete($valore)
	{
		$tmp = array($valore);
		$this->query("delete from $this->table where $this->key=?", $tmp);
	}

    public function search($colonna, $valore)
    {
        $tmp=array($valore);
        $val =  $this->query("SELECT * FROM $this->table WHERE $colonna = ?",$tmp);
        #$temp=$val[0];
        #$obj=new EConsumatore($temp["Nome"], $temp["Username"], $temp["E-mail"], $temp["Password"]);
        return $val[0];
    }
}


?>
		
		