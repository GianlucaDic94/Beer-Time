<?php

require_once 'include.php';

/* Classe che delinea i passi per l'acquisto di una bottiglia */

class CAcquisto
{
    public function Catalogo($pagina)
    {
        $user = new CUtente();
        $vprod = new VAcquisto();
        $fbott = FBottiglia::getInstance();
        $result = $fbott->retrieve();
        $vprod->Catalogo($user->isLogged(), $result, $pagina);
        printf($_SESSION["Username"]);

    }

    public function Prodotto($bottiglia)
    {
        $bott=str_replace('%20',' ', $bottiglia);
        $user = new CUtente();
        $vprod = new VAcquisto();
        $fbott = FBottiglia::getInstance();
        $result = $fbott->search("Nome", $bott);
        $vprod->Prodotto($user->isLogged(), $result);
    }

    public function Spesa($bottiglia)
    {
        session_start();
        if(isset($_SESSION["Carrello"]))
            $carrello = unserialize($_SESSION["Carrello"]);
        else $carrello = new EOrdine();
        $bott = str_replace('%20', ' ', $bottiglia);
        $carrello->aggiungiItem($bott,$_POST["Quantità"]);
        $_SESSION["Carrello"] =  serialize($carrello);
        Header('Location:/Beer-Time/Acquisto/Catalogo?1');
    }

    public function Rimuovi($posizione)
    {
       session_start();
        if(isset($_SESSION["Carrello"]))
            $carrello = unserialize($_SESSION["Carrello"]);
        unset($carrello->item[$posizione]);
        $_SESSION["Carrello"] =  serialize($carrello);
        Header('Location:/Beer-Time/Acquisto/CheckOut');

    }

    public function CheckOut()
    {
        session_start();
        if(isset($_SESSION["Carrello"]))
            $carrello = unserialize($_SESSION["Carrello"]);
        else $carrello= new EOrdine();
        $vacquisto = new VAcquisto();
        $carr = $carrello->getArrayItem();
        $vacquisto->CheckOut($carr, sizeof($carr));
    }

    public function Pagamento($totale)
    {
        $view = new VAcquisto();
        $view->Pagamento($totale);

    }

    public function Acquista($totale)
    {
        session_start();
        $ordine = unserialize($_SESSION["Carrello"]);
        $carta = new ECarta_Di_Credito($_POST["Titolare"], $_POST["Carta"], $_POST["codice"], $_POST["Mese"], $_POST["Anno"]);
        $ordine->confermaOrdine($carta, $_POST["Indirizzo"]);
        $fordine = FOrdine::getInstance();
        $ordine->totale = $totale;
        $fordine->insert($ordine, $_SESSION["Username"]);
        unset($_SESSION["Carrello"]);
        header('Location:/Beer-Time');
    }





}