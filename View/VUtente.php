<?php

require_once "include.php";

/**
 * La classe VUtente si occupa dell'input-output per quanto riguarda la gestione di un utente. In particolare:
 * - Permette al client di visualizzare pagine relative all'utente (login-registrazione-profilo)
 * @author Di Colli - De Vincentiis
 * @package View
 */

class VUtente
{
    private $smarty;

    public function getInput()
    {

        return $_POST;
    }

    public function showRegistrazione()
    {
        $this->smarty=ConfSmarty::configuration();
        $this->smarty->display('registrazione.tpl');
    }

    public function showRegistrazioneProd()
    {
        $this->smarty=ConfSmarty::configuration();
        $this->smarty->display('registrazioneProd.tpl');
    }

    public function showLogin()
    {
        $this->smarty=ConfSmarty::configuration();
        $this->smarty->display('login.tpl');
    }

    public function showLogged()
    {
        $this->smarty=ConfSmarty::configuration();
        $this->smarty->display('homeLogged.tpl');

    }

    public function showLoggedProd()
    {
        $this->smarty=ConfSmarty::configuration();
        $this->smarty->display('productsProd.tpl');
    }

    public function showError()
    {
        $this->smarty=ConfSmarty::configuration();
        $this->smarty->display('registrazione.tpl');
    }
}

