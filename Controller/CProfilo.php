<?php

require_once 'include.php';

//classe che delinea le funzioni per la gestione del profilo dell'utente Consumatore e dell'utente Produttore.

class CProfilo
{
    public function Profilo()
    {
        session_start();

        if($_SESSION["Type"] == "Cons")
        {

            $fcons = FConsumatore::getInstance();
            $result = $fcons->search("Username", $_SESSION["Username"]);
            $view = new VProfilo();
            $fordini = FOrdine::getInstance();
            $ordini = $fordini->search("Utente_ID", $_SESSION["Username"]);
            $view->Profilo($result, $ordini);
        }

        elseif($_SESSION["Type"] == "Prod")
        {
            $fprod = FProduttore::getInstance();
            $result = $fprod->search("Username", $_SESSION["Username"]);
            $view = new VProfilo();
            $view->ProfiloProd($result[0]);
        }
    }


    public function Modifica()
    {
        session_start();
        if($_SESSION["Type"] == 'Cons')
        {
            $fcons = FConsumatore::getInstance();
            if($_POST["Username"])
            {
                $fcons->update("Username", $_POST["Username"], $_SESSION["Username"]);
                $_SESSION["Username"] = $_POST["Username"];
            }
            if($_POST["Nome"])
                $fcons->update("Nome", $_POST["Nome"], $_SESSION["Username"]);
            if($_POST["Email"])
                $fcons->update("Email", $_POST["Email"], $_SESSION["Username"]);
            if($_POST["Password"])
                $fcons->update("Password", md5($_POST["Password"]), $_SESSION["Username"]); //md5 per ritornare una stringa di 32 caratteri (cripta la password)
            header('Location:/Beer-Time');
        }

        else if ($_SESSION["Type"] == 'Prod')
        {
            $fprod = FProduttore::getInstance();
            if($_POST["Username"])
            {
                $fprod->update("Username", $_POST["Username"], $_SESSION["Username"]);
                $_SESSION["Username"] = $_POST["Username"];
            }
            if($_POST["Nome"])
                $fprod->update("Nome", $_POST["Nome"], $_SESSION["Username"]);
            if($_POST["Email"])
                $fprod->update("Email", $_POST["Email"], $_SESSION["Username"]);
            if($_POST["Password"])
                $fprod->update("Password", md5($_POST["Password"]), $_SESSION["Username"]);
            if($_POST["Indirizzo"])
                $fprod->update("Indirizzo", $_POST["Indirizzo"], $_SESSION["Username"]);
            header('Location:/Beer-Time');
        }


    }
}