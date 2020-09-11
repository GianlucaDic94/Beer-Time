<?php

require_once 'include.php';

/**
 * La classe VGestione si occupa dell'input-output per quanto riguarda l'aggiunta di una bottiglia al catalogo.
 * @author Di Colli - De Vincentiiis
 * @package View
 */

class VGestione
{
    private $smarty;

    public function Catalogo($bottiglie)
    {
        $this->smarty = ConfSmarty::configuration();
        $this->smarty->assign('bottiglie', $bottiglie);
        $this->smarty->display('productsProd.tpl');
    }

    public function Aggiungi()
    {
        $this->smarty = ConfSmarty::configuration();
        $this->smarty->display('formProdotto.tpl');
    }

    public function Prodotto($bottiglia)
    {
        $this->smarty = ConfSmarty::configuration();
        $this->smarty->assign('bottiglia', $bottiglia);
        $this->smarty->display('itemProd.tpl');
    }
}