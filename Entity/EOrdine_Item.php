<?php

/***********************
 * Classe che modella gli elementi nel carrello,
 * costituiti da un prodotto Bottiglia e una sua quantità desiderata
 ************************/


require_once "include.php";

Class EOrdine_Item
{
  /* Attributi */

  public $prodotto;
  public $quantità;

  /* Costruttore */

  public function __construct($input1, $input2)
  {
  	$this->prodotto = $input1 ;
  	$this->quantità = $input2 ; 
  }

  public function getProdotto() : EBottiglia
  {
      return $this->prodotto;
  }

  public function getQuantità()
  {
      return $this->quantità;
  }

    /**
     * @param EBottiglia $prodotto
     */
    public function setProdotto(EBottiglia $prodotto): void
    {
        $this->prodotto = $prodotto;
    }

    /**
     * @param mixed $quantità
     */
    public function setQuantità($quantità): void
    {
        $this->quantità = $quantità;
    }

    public function getArray() : array
    {
        $a =FBottiglia::getInstance();
        $res = $a->search("Nome", $this->prodotto);
        $arr = array($this->prodotto, $this->quantità, $res[0]["Prezzo"]*$this->quantità);
        return $arr;

    }

}
