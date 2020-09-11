<?php

require_once 'include.php';

/**
 * La classe VAcquisto si occupa dell'input-output per quanto riguarda l'acquisto di una o più bottiglie.
 * @author Di Colli - De Vincentiis
 * @package View
 */


class VAcquisto
{
    private $smarty;

    public function Catalogo($logged, $bottiglie, $pagina)
    {
        $this->smarty = ConfSmarty::configuration();
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('bottiglie', $bottiglie);
        if($pagina>0 && $pagina<=((count($bottiglie))/8)+1)
        {
            $this->smarty->assign('pagina', $pagina);
            $this->smarty->display('products.tpl');
        }

    }

    public function Prodotto($logged, $bottiglia)
    {
        $this->smarty = ConfSmarty::configuration();
        if ($logged)
        {
            $this->smarty->assign('bottiglia', $bottiglia);
            $this->smarty->display('item.tpl');
        }
        else $this->smarty->display('login.tpl');
    }

    public function CheckOut($carrello, $size)
    {
        $this->smarty = ConfSmarty::configuration();
        $this->smarty->assign('carrello', $carrello);
        $this->smarty->assign('size', $size);
        $this->smarty->display('carrello.tpl');
    }

    public function Pagamento($totale)
    {
        $this->smarty = ConfSmarty::configuration();
        $this->smarty->assign('totale', $totale);
        $this->smarty->display('pagamento.tpl');
    }


}