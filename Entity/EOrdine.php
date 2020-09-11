<?php

/*********************************************
 * Classe che modella l'oggetto di tipo Ordine,
 * ovvero il classico carrello degli acquisti
 *********************************************/

 require_once "include.php";


class EOrdine
{
	/* Attributi */
	public $data;
	public $pagato = false;
	public $item = array(); # array di oggetti EOrdine_Item
	public $carta_di_credito; # oggetto di tipo Carta di Credito
	public $indirizzo_spedizione;
	public $totale;
	public $id;

	/* Costruttore */
	public function __construct () {}

	/* Metodo che aggiunge un'item al carrello */
	public function aggiungiItem($bottigliaIN, $quantitàIN)
	{
		$prov = false; # booleano per scoprire se tentiamo di aggiungere una bottiglia già presente nell'ordine
		foreach ($this->item as &$value) {
			if ($value->prodotto == $bottigliaIN) 
				{
					$value->quantità += $quantitàIN; # se trova una bottiglia già presente aggiorna la quantità
					$prov = true;
				}
		}
		if ($prov == false) # se invece non trova doppioni aggiunge un nuovo Item
			$this->item[] = new EOrdine_Item ($bottigliaIN, $quantitàIN);
		else ;

	}	

	/* Metodo che calcola il totale */
	public function calcolaTot() 
	{
		$tot = 0;
		foreach ($this->item as &$value) {
			$tot += ($value->getProdotto()->getPrezzo()*$value->getQuantità());
		}
		$this->totale = $tot;
	}

	/* Metodo che rimuove un Item */
	public function rimuoviItem( $pos )
	{
		unset($this->item[$pos]); 
	}

    public function confermaOrdine(ECarta_Di_Credito $cartaIN, $indirizzoIN)
    {
        $this->indirizzo_spedizione = $indirizzoIN;
        $this->data = new DateTime("now", new DateTimeZone('Europe/Rome'));
        $this->pagato = true;
        $this->carta_di_credito = $cartaIN;
        $this->id = rand(1, 2000);
        #$this->creaOrdine();
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data->format('Y-m-d');
    }

    /**
     * @return mixed
     */
    public function getIndirizzoSpedizione()
    {
        return $this->indirizzo_spedizione;
    }

    /**
     * @return mixed
     */
    public function getTotale()
    {
        return $this->totale;
    }

    /**
     * @return bool
     */
    public function isPagato()
    {
        if($this->pagato)
        	return 1;
        else return 0;
    }

    /**
     * @return mixed
     */
    public function getCartaDiCredito()
    {
        return $this->carta_di_credito->getNumero();
    }

    public function getArrayItem()
    {
        $i = 0;
        $tot=0;
        foreach ($this->item as $value)
        {
            $arr[$i] = $value->getArray();
            $tot+=$arr[$i][2];
            $i++;
        }
        $arr[]=$tot;
        return $arr;
    }

	
}


		
	
	
				
		
