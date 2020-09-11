<?php

/****************************************************
 * Classe che modella l'Utente Produttore (registrato)
 ***************************************************/
require_once "include.php";
require_once "EUtente.php";


class EProduttore extends EUtente
{
      
    /* Attributi */
    protected $nome;
	protected $username;
	protected $password; 
    protected $email;
    private $indirizzo;

    /* Costruttore */
    public function __construct($usernameIN, $passwordIN, $emailIN, $nomeIN, $indirizzoIN )
    {
        EUtente::__construct($usernameIN, $passwordIN, $emailIN, $nomeIN);
        $this->indirizzo = $indirizzoIN;
    }

    /* Metodo per creare una bottiglia ed aggiungerla al catalogo */
    public function creaBottiglia($nomeIN, $descrizioneIN, $gradazione_alcolicaIN, $formatoIN, ECategoria $stileIN, $prezzoIN)
    {
        $bottiglia = new EBottiglia($nomeIN, $descrizioneIN, $gradazione_alcolicaIN, $formatoIN, $this, $stileIN, $prezzoIN);
		// $this->catalogo[] = $bottiglia;
		return $bottiglia;
        
	}

    public function login()
    {
        $fprod = FProduttore::getInstance();
        $result = $fprod->search2chiavi("Username", "Password", $this->username, $this->password);
        return $result;
    }

    //Setters
    public function setNome( String $nomeIN )
	{
        $this->nome = $nomeIN;
	}

    public function setEmail( String $emailIN )
	{
        $this->email = $emailIN;
	}
	
	public function setIndirizzo ( String $indirizzoIN )
	{
		$this->indirizzo = $indirizzoIN;
	}

	public function setPassowrd ( string $passwordIN)
	{
		$this->password = $passwordIN;
	}
	
	//Getters
	public function getNome() : String
	{
		return $this->nome;
	}
	
	public function getUsername() : String
	{
		return $this->username;
	}
	
	public function getEmail() : String
	{
		return $this->email;
	}
	
	public function getIndirizzo() : String
	{
		return $this->indirizzo;
	}

	public function getCatalogo() : array
	{
		return array_values($this->catalogo);
	}

	public function getPassword() : string
	{
		return md5($this->password);
	}
	
	
} 


	
	
	
	

    	