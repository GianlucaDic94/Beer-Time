<?php

require_once "include.php";

/**
 * La classe FrontController effettua il dispatching verso i metodi dei vari controller
 * a seconda dell'URL richiesta dal client.
 * @author Di Colli - De Vincentiis
 */

class FrontController
{

    /**
     * La funzione run effettua il dispatching verso i metodi di un determinato controller.
     * Un URL ha il seguente formato:
     *                  /Beer-Time/Controller/method/(params)
     * dove i parametri possono essere per un massimo di tre e possono essere delimitati da metacaratteri come '&' o '?'
     * Se l'URL non e' valida, l'utente viene reindirizzato alla pagina principale
     */

    function run()
    {
        $resources = preg_split("#[][&?/]#", $_SERVER['REQUEST_URI']);  // Individua le componenti dell'URL.

        $controller = 'C' . ucfirst($resources[2]);  // Costruisce il nome della classe del Controller.
        if (class_exists($controller))  // Se la classe esiste...
        {  // Verifica che il metodo sia valido.
            $method = $resources[3];

            if (method_exists($controller, $method))  // Se il metodo è valido...
            {  // Verifica la presenza di eventuali parametri.
                $param1 = NULL; $param2 = NULL; $param3 = NULL;

                if(isset($resources[4]))
                    $param1 = $resources[4];
                if(isset($resources[5]))     // Se anche un secondo parametro è definito.
                    $param2 = $resources[5];
                if(isset($resources[6]))
                    $param3 = $resources[6];

                if($param3)  // Se tutti i parametri sono definiti.
                    $controller::$method($param1, $param2, $param3);
                elseif($param2)  // Se solo 2 parametri sono definiti.
                    $controller::$method($param1, $param2);
                elseif($param1)  // Se solo un parametro è definito.
                    $controller::$method($param1);
                else  // Se nessun parametro è definito.
                    $controller::$method();
            }
            else  // Se la classe non esiste, si viene reindirizzati alla pagina principale.
            {
                $smarty = ConfSmarty::configuration();
                session_start();
                if (!isset($_SESSION["Username"]))
                    $smarty->display('index.tpl');
                else $smarty->display('homeLogged.tpl');
            }
        }
        else
        {
            $smarty = ConfSmarty::configuration();
            session_start();
            if (!isset($_SESSION["Username"]))
                $smarty->display('index.tpl');
            else $smarty->display('homeLogged.tpl');
        }

        exit;
    }
}
