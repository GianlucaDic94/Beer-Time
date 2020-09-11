<?php

/******************************************************
 * Classe che definisce i diversi stili/categorie usati 
 * per la classificazione delle birre
 *****************************************************/

Class ECategoria{

	/* Attributi */
	private $nome;
	private $tipo;
	private $descrizione;

	/* Costruttore */
	public function __construct(string $nomeIN, string $tipoIN, string $descrizioneIN)
	{
		$this->nome=$nomeIN;
		$this->tipo=$tipoIN;
		$this->descrizione=$descrizioneIN;
    }

	/* Setters */
	public function setNome(string $nomeIN) 
	{
		$this->nome = $nomeIN;
	}

	public function setTipo(string $tipoIN)
	{
		$this->tipo = $tipoIN;
	}

	public function setDescrizione (string $descrizioneIN)
	{
		$this->descrizione = $descrizioneIN;
	}

	/* Getters */
	public function getNome()
	{
		return $this->nome;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function getDescrizione()
	{
		return $this->descrizione;
	}

	// Funzione toString
	public function toString() : String
	{
		return "$this->nome, $this->tipo";
	}
} 
