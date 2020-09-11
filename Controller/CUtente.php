<?php

require_once "include.php";

//classe che delinea le funzioni per la gestioni di login e registrazione

class CUtente
{

    /**
     * Metodo che implementa il caso d'uso di registrazione. Se richiamato a seguito di una richiesta
     * GET da parte del client, mostra la form di compilazione; altrimenti se richiamato tramite POST
     * riceve i dati forniti dall'utente e procede con la creazione di un nuovo utente.
     */

    public function registrazione()
    {
        $vuser = new VUtente();
        if($_SERVER["REQUEST_METHOD"] == "GET")
            $vuser->showRegistrazione();
        else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!isset($_POST["Indirizzo"]))
            {
                $input = $vuser->getInput();   // Per evitare di riscrivere la variabile superglobale $_Post
                $econs = new EConsumatore($input["Username"], $input["Password"], $input["Email"], $input["Nome"]);

                $result = $econs->registrazione();
                if ($result)
                {
                    session_start();
                    if (!isset($_SESSION["Username"])){
                        $_SESSION["Username"] = $input["Username"];
                    $_SESSION["Type"] = 'Cons';
                    $vuser->showLogged();}
                }
                else $vuser->showError(); //tornare a modulo

            }

            else
            {
                $fprod = FProduttore::getInstance();
                $eprod = new EProduttore($_POST["Username"], $_POST["Password"], $_POST["Email"], $_POST["Nome"], $_POST["Indirizzo"]);
                $fprod->insert($eprod);
                session_start();
                if (!isset($_SESSION["Username"]))
                {
                    $_SESSION["Username"] = $_POST["Username"];
                    $_SESSION["Type"] = 'Prod';
                    $fprod = FProduttore::getInstance();
                    $result = $fprod->search("Username", $_SESSION["Username"]);
                    $vuser->showLoggedProd( $result[0]);
                }
                else $vuser->showError();
            }
        }


    }

    public function registrazioneProd()
    {
        $vuser = new VUtente();
        $vuser->showRegistrazioneProd();
        $this->registrazione();

    }

    /**
     * Metodo che implementa il caso d'uso di login. Se richiamato tramite GET, fornisce
     * la pagina di login, se richiamato tramite POST cerca di autenticare l'utente attraverso
     * i valori che quest'ultimo ha fornito
     */

    public function logIn()
    {
        $vuser = new VUtente();
        if($_SERVER["REQUEST_METHOD"] == "GET") {           // Se il metodo è GET, carica la pagina del login

            session_start();
            $vuser->showLogin();
        }

        else if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $input = $vuser->getInput();
            if($_POST["Utente"] == 'Consumatore') {
                $econs = new EConsumatore($input["Username"], $input["Password"], "aa", "aa");
                $result = $econs->login();
                if ($result) {
                    session_start();
                    if (!isset($_SESSION["Username"]))
                        $_SESSION["Username"] = $input["Username"];
                        $_SESSION["Type"] = 'Cons';
                    $vuser->showLogged();
                } else echo 'Attenzione! Username e/o password errati';
            }
            else if ($_POST["Utente"] == 'Produttore')
            {
                $eprod = new EProduttore($_POST["Username"], $_POST["Password"], "aa", "aa", "aa");
                $result = $eprod->login();
                if ($result) {
                    session_start();
                    if(!isset($_SESSION["Username"]))
                        $_SESSION["Username"] = $_POST["Username"];
                    $_SESSION["Type"] = 'Prod';
                    $vuser->showLoggedProd();
                }   else echo 'Attenzione! Username e/o password errati';

            }
        }
    }

    public function logOut()
    {
        session_start(); //si inizializza una sessione
        session_destroy(); //cancellazione del file di sessione
        header("Location:/Beer-Time/"); //reindirizzamento alla homepage sloggata
    }

    public function isLogged()
    {
        session_start();
        if(!isset($_SESSION["Username"]))
        {
            return false;
        }
        else return true;
    }

    public function checkUsername($username) {
        $fuser = FConsumatore::getInstance();
        $result = $fuser->search("Username", $username);
        if ($result)
            echo 'true';
        else echo "false";
    }


    public function checkEmail($email) {
        $fuser = FConsumatore::getInstance();
        $result = $fuser->search("Email", $email);
        if ($result)
            echo 'true';
        else echo 'false';
    }



}
