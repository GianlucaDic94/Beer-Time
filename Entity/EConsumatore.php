<?php

/******************************************************
 * Classe che modella l'Utente Consumatore (registrato)
 *****************************************************/

require_once "EUtente.php";
require_once "include.php";

class EConsumatore extends EUtente
{

	/* Attributi */
    // Attributi ereditati da EUtente
	protected $nome ;
	protected $username ;
	protected $email ;
	protected $password;
	//Attributi specifici della classe
	private $ordini = array() ;  # array di oggetti di tipo Ordine, ovvero tutti gli ordini completati
	private $valutazioni = array() ;
	public $carrello ; # rappresenta l'ordine in corso, non ancora completato


	/* Costruttore */
    /**
     * EConsumatore constructor.
     * @param $usernameIN
     * @param $passowrdIN
     * @param $emailIN
     * @param $nomeIN
     * @param $indirizzoIN
     */
    public function __construct($usernameIN, $passowrdIN, $emailIN, $nomeIN )
	{
		EUtente::__construct($usernameIN, $passowrdIN, $emailIN, $nomeIN);
	}

	/* Metodo per creare un ordine */
	public function creaOrdine() 
	{
		$this->carrello= new EOrdine();
	}

	/* Metodo di conferma dell'ordine */
	public function confermaOrdine(ECarta_Di_Credito $cartaIN, $indirizzoIN)
	{
		$this->carrello->indirizzo_spedizione = $indirizzoIN;
		$this->carrello->data = new DateTime("now", new DateTimeZone('Europe/Rome'));
		$this->carrello->pagato = true;
		$this->carrello->carta_di_credito = $cartaIN;
		$this->ordini[] = $this->carrello;
		$this->carrello->calcolaTot();
		$this->creaOrdine();
	}

	public function registrazione() : bool
    {
        $fcons = FConsumatore::getInstance();
        $res1 = $fcons->search("Username", $this->username);
        $res2 = $fcons->search("Email", $this->email);
        if (!$res1 && !$res2)
        {
            $fcons->insert($this);
            return true;
        }
        else return false;
    }

    public function login()
    {
        $fcons = FConsumatore::getInstance();
        $result = $fcons->search2chiavi("Username", "Password", $this->username, $this->password);
        return $result;
    }

	public function aggiungiOrdine ( EOrdine $ordineIN)
	{
		$this->ordini[] = $ordineIN;
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



	//Getters
	public function getNome() : String
	{
		return $this->nome;
	}

	public function getUsername() : String
	{
		return $this->username;
	}

	public function getemail() : String
	{
		return $this->email;
	}


	public function getOrdini() : array
	{
		return $this->ordini;
	}

	public function getPassword(): String
    {
        return $this->password;
    }

}






