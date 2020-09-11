<?php

require_once 'include.php';

/**
 * La classe VProfilo permette la visualizzazione delle info dell'utente consumatore (Informazioni personali-Ordini effettuati)
 * e permette anche la visualizzazione delle info dell'utente produttore (Informazioni personali).
 */

class VProfilo
{
    private $smarty;

    public function Profilo($user, $ordini)
    {
        $this->smarty = ConfSmarty::configuration();

        $this->smarty->assign('utente', $user);
        $this->smarty->assign('ordini', $ordini);
        $this->smarty->display('profilo.tpl');
    }

    public function ProfiloProd($user)
    {
        $this->smarty = ConfSmarty::configuration();

        $this->smarty->assign('utente', $user);
        $this->smarty->display('profiloProd.tpl');
    }
}