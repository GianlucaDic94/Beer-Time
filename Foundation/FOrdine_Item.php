<?php

require_once 'Fdb.php';
require_once 'include.php';

class FOrdine_Item extends Fdb
{

    protected function __construct()
    {
        parent::__construct();
        $this->table = 'Ordine_Item';
        #$this->key='Username';
        $this->return_class = 'EOrdine_Item';
    }


    public function insert(EOrdine_Item $ordine_Item, $ordineID)
    {

        $temp = $ordine_Item->prodotto;
        $array = array($temp);
        $temp3 = $this->query("select ID from Bottiglia where Nome=?", $array);
        $v = array($ordine_Item->getQuantità(), $temp3[0]["ID"],  $ordineID);
        $res = $this->query("insert into $this->table values (?, ?, ?)", $v);

        return $res;

    }

    public function update($colonna, $valore, $valoreChiave)
    {
        $tmp = array($valoreChiave);
        $this->query("update $this->table set $colonna='$valore' where $this->key=?", $tmp);
    }

    public function delete($valore)
    {
        $tmp = array($valore);
        $this->query("delete from $this->table where $this->key=?", $tmp);
    }

    public function search($colonna, $valore)
    {
        $tmp=array($valore);
        $val =  $this->query("SELECT * FROM $this->table WHERE $colonna = ?",$tmp);
        #$temp=$val[0];
        #$obj=new EConsumatore($temp["Nome"], $temp["Username"], $temp["E-mail"], $temp["Password"]);
        #return $obj;
    }
}