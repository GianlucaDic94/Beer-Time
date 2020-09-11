<?php
/**
 * Created by PhpStorm.
 * User: Gruppo 4
 * Date: 30/08/18
 * Time: 9.20
 */


/**
 * Class Fdb
 */
class Fdb
{

    /**
     * @var variabile che gestisce la connessione
     */
    public $connection;
    /**
     * @var contiene il nome del database
     */
    public $db ;
    /**
     * @var contiene il nome della tabella
     */
    protected $table;
    /**
     * @var contiene la chiave primaria
     */
    protected $key;
    /**
     * @var contiene la classe Entity da ritornare
     */
    protected $return_class;
    /**
     * @var per le tabelle con chiave ad auto incremento
     */
    protected $auto_increment;


    /*-------------------------METODI DI CREAZIONE CLASSE---------------------------------*/

    /**
     * Effettua la connessione al db
     * @param $host
     * @param $db
     * @param $username
     * @param $password
     */
    public function connect($host, $db, $username, $password)
    {
        try {
            $this->db = 'prova2';
            $this->connection = new PDO("mysql:host=$host;dbname=$db", $username, $password);
        } catch (PDOException $e) {
            echo("Connessione fallita:" . $e->getMessage() . "\n");
            die();
        }
    }


    /**
     * Metodo che implementa il pattern Singleton per questa classe e le sottoclassi
     * @return bool/Fdb Ritorna l'unica istanza dell'oggetto (si estende anche alle sottoclassi)
     */
    public static function getInstance()
    {
        static $instance = false;

        if ($instance === false) {
            $instance = new static();
        }
        return $instance;
    }

    /**
     * Fdb constructor.
     */
    public function __construct()
    {
        $this->connect('127.0.0.1', 'beertime', 'root', '');
    }

    /**
     * Effettua la disconnessione dal db
     */
    public function __destruct()
    {
        $this->connection = null;
    }

    /**
     * Metodo privato che impedisce la clonazione dell'oggetto
     */
    private function __clone()
    {
    }

    /**************************************** METODI CRUD ************************************************************/

    public function query($statement, $valori)
    {
        $sql = $this->connection->prepare($statement);
        $i=1;
        foreach ($valori as $key => $value)
        {
            $sql->bindParam($i,$valori[$i-1]);
            $i=$i+1;
        }
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * Funzione che inserisce una Tupla nel database
     * @param $tabella il nome della tabella
     * @param $valori
     * @return mixed
     */
    public function inserisci($valori)
    {
        $statement = "INSERT INTO $tabella VALUES ($valori)";
        $result = $this->query($statement);
        return $result;

    }

    /**
     * Funzione che effettua una query di ricerca
     * @param $tabella
     * @param $attributo
     * @param $valore
     * @return mixed
     */
    public function ricerca($tabella, $attributo, $valore)
    {
        $statement = "SELECT * FROM $tabella WHERE $attributo='$valore' ";
        $result = $this->query($statement);
        return $result;
    }

    /**
     * Funzione che aggiorna valori nel database
     * @param $tabella
     * @param $attributo
     * @param $valore
     * @param $chiave
     * @param $valorechiave
     * @return mixed
     */
    public function aggiorna($tabella, $attributo, $valore, $chiave, $valorechiave){

        $query="UPDATE $tabella SET $attributo = '$valore' WHERE $chiave = '$valorechiave'";
        $result = $this->query($query);
        return $result;

    }

    /**
     * Funzione che eliimina una Tupla
     * @param $tabella
     * @param $chiave
     * @param $valore
     */
    public function elimina($tabella, $chiave, $valore){

        $query = "DELETE FROM $tabella WHERE $chiave = '$valore'";
        $this->query($query);

    }

    protected function prova(){
        return $this->connection;
    }
}
