<?php

require_once 'Fdb.php';
require_once 'include.php';

class FConsumatore extends Fdb
{

    protected function __construct()
    {
        parent::__construct();
        $this->table='Consumatore';
        $this->key='Username';
        $this->return_class='EConsumatore';
    }




    public function insert(EConsumatore $consumatore){

        $v = array($consumatore->getNome(), $consumatore->getUsername(), $consumatore->getPassword(), $consumatore->getEmail());
        $res = $this->query("insert into $this->table values (?,?,?,?)",$v);

        return $res;

    }

    public function update($colonna,$valore,$valoreChiave)
    {
        $tmp=array($valoreChiave);
        $this->query("update $this->table set $colonna='$valore' where $this->key=?",$tmp);
    }

    public function delete($valore)
    {
        $tmp=array($valore);
        $this->query("delete from $this->table where $this->key=?",$tmp);
    }

    public function search($colonna, $valore)
    {
        $tmp=array($valore);
        $val =  $this->query("SELECT * FROM $this->table WHERE $colonna = ?",$tmp);
        if($val) {
            $temp = $val[0];
            #$obj=new EConsumatore($temp["Nome"], $temp["Username"], $temp["E-mail"], $temp["Password"]);
            return $temp;
        }
    }

    public function search2chiavi($colonna1, $colonna2,  $valore1, $valore2)
    {
        $tmp=array($valore1, $valore2);
        $val =  $this->query("SELECT * FROM $this->table WHERE $colonna1 = ? AND $colonna2 = ?",$tmp);
        if($val) {
            $temp = $val[0];
            #$obj=new EConsumatore($temp["Nome"], $temp["Username"], $temp["E-mail"], $temp["Password"]);
            return $temp;
        }
    }

}