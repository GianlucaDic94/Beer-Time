<?php

require_once 'Fdb.php';
require_once 'include.php';

class FOrdine extends Fdb
{

    protected function __construct()
    {
        parent::__construct();
        $this->table='Ordine';
        $this->key='Id';
        $this->return_class='EOrdine';
    }




    public function insert(EOrdine $ordine, $utente){

        $v = array($ordine->id, $ordine->getData(), $ordine->isPagato(), $ordine->getIndirizzoSpedizione(), $ordine->getTotale(), $utente);
        $res = $this->query("insert into $this->table values (?, ?, ?, ?, ?, ?)", $v);
        $fitem = FOrdine_Item::getInstance();
        $i = 0;
        foreach ($ordine->item as $value)
        {
            $fitem->insert($value, $ordine->id);
            $i++;
        }
        return $res;

    }

    public function update($colonna,$valore,$valoreChiave)
    {
        $tmp = array($valoreChiave);
        $this->query("update $this->table set $colonna='$valore' where $this->key=?", $tmp);
    }

    /*public function delete($valore)
    {
        $this->query("delete from $this->table where $this->key='$valore'");
    }*/

    public function search($colonna, $valore)
    {
        $tmp = array($valore);
        $val =  $this->query("SELECT * FROM $this->table WHERE $colonna = ?", $tmp);
        return $val;
    }

}
