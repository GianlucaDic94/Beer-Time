<?php

/*************************************************
 * Classe che modella l'oggetto Bottiglia di Birra
*************************************************/

require_once "include.php";

class EBottiglia 
{
    /* Attributi */
    private $nome; # nome della bottiglia 
    private $descrizione; # breve stringa per descrivere la bottiglia 
    private $gradazione_alcolica; # percentuale di alcol in volume
    private $formato; # capienza della bottiglia
    private $produttore; # nome del produttore -> oggetto Produttore
    private $stile; # oggetto di tipo ECategoria
    private $prezzo; # prezzo della bottiglia
	public $valutazioni = array(); # array di oggetti EValutazione
	private $id;

    /* Costruttore */
    public function __construct ( $nomeIN, $descrizioneIN, $gradazione_alcolicaIN, $formatoIN,  $produttoreIN,  $stileIN, $prezzoIN)
    {
        //inizializzazione degli attributi
        $this->nome = $nomeIN ;
        $this->descrizione = $descrizioneIN ;
        $this->gradazione_alcolica = $gradazione_alcolicaIN.'%' ;
        $this->formato = $formatoIN ;
        $this->produttore = $produttoreIN ;
        $this->stile = $stileIN ; 
        $this->prezzo = $prezzoIN;
    }
	
	//Setters
	public function setNome ( String $nomeIN )
	{
		$this->nome = $nomeIN;
	}
	
	public function setDescrizione ( String $descrizioneIN )
	{
		$this->descrizione = $descrizioneIN;
	}
	
	public function setGradazione_Alcolica ( int $gradazione_alcolicaIN )
	{
		$this->gradazione_alcolica = $gradazione_alcolicaIN;
	}
	
	public function setFormato ( int $formatoIN )
	{
		$this->formato = $formatoIN;
	}
	
	public function setProduttore ( String $produttoreIN )
	{
		$this->produttore = $produttoreIN;
	}
	
	public function setPrezzo (int $prezzoIN )
	{
		$this->prezzo = $prezzoIN;
	}

	
	//Getters
	public function getNome()
	{
		return $this->nome;
	}
	
	public function getDescrizione()
	{
		return $this->descrizione;
	}
	
	public function getGradazione_Alcolica()
	{
		return $this->gradazione_alcolica;
	}
	
	public function getFormato()
	{
		return $this->formato;
	}
	
	public function getProduttore()
	{
		return $this->produttore; # fare toString della classe produttore
	}
	
	public function getStile()
	{
		return $this->stile->toString(); 
	}
	
	public function getPrezzo()
	{
		return  $this->prezzo;
	}

	public function toString()
	{
		return $this->nome;
	}


}






