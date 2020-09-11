<?php

require_once 'include.php';

//classe che delinea i passi per la gestione di informazioni personali

class CGestione
{
    public function Catalogo()
    {
        session_start();
        $fbott = FBottiglia::getInstance();
        $result = $fbott->search("Produttore", $_SESSION["Username"]);
        $view = new VGestione($result);

        $view->Catalogo($result);
    }

    /**
     * La funzione Aggiungi corrisponde al caso d'uso 'Aggiungi Bottiglia' e permette la visualizzazione della form
     * per il caricamento di una bottiglia, a seguito di una richiesta GET, o l'inserimento di una bottiglia da parte di un utente a seguito
     * di una richiesta POST.
     */

    public function Aggiungi()
    {
        session_start();
        if($_SERVER["REQUEST_METHOD"] == 'GET')
        {
            $view = new VGestione();
            $view->Aggiungi();
        }

        else
        {
            $fbott = FBottiglia::getInstance();
            $bottiglia = new EBottiglia($_POST["Nome"], $_POST["Descrizione"], $_POST["Gradazione"], $_POST["Formato"], $_SESSION["Username"], $_POST["Stile"], $_POST["Prezzo"]);
            $fbott->insert($bottiglia, $_POST["Stile"], $_SESSION["Username"]);
            header('Location:/Beer-Time/Gestione/Catalogo');
        }
    }

    /**
     * La funzione rimuovi implementa il caso d'uso 'Rimuovi Bottiglia'
     */

    public function rimuovi($bottiglia)
    {
        $bott = str_replace('%20', '', $bottiglia);
        $fbott = FBottiglia::getInstance();
        $fbott->delete("Nome",$bott);
        header('Location:/Beer-Time/Gestione/Catalogo');
    }



}