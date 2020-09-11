<?php

/* Classe astratta utente da cui erediteranno i vari tipi di Utenti previsti */
abstract class EUtente
{
    // Attributi comuni a tutti gli Utenti
    protected $username ; # nome che identifica un utente
    protected $password;
    protected $email ; # email di riferimento
    protected $nome ;

    // Costruttore

    /**
     * EUtente constructor.
     * @param $userIN
     * @param $passwordIN
     * @param $emailIN
     * @param $nomeIN
     */
    public function __construct ($userIN, $passwordIN, $emailIN, $nomeIN) {
        $this->username = $userIN;
        $this->password = md5($passwordIN);
        $this->email = $emailIN;
        $this->nome = $nomeIN;
    }

    
}

